<?php

class News
{
	var $_title, $_text, $_dt, $_imgPath, $mysqli;
	
	function News($userName, $password)
	{
		$this->connect($userName, $password);			
	}
	
	function setTitle($title)
	{
		$this->_title = $title;
	}
	
	function getTitle()
	{
		return $this->_title;
	}
	
	function setText($text)
	{
		$this->_text = $text;
	}
	
	function getText()
	{
		return $this->_text;
	}
	
	function setDt($dt)
	{
		$this->_dt = $dt;
	}
	
	function getDt()
	{
		return $this->_dt;
	}
	
	function setImgPath($imgPath)
	{
		$this->_imgPath = $imgPath;
	}
	
	function getImgPath()
	{
		return $this->_imgPath;
	}
	
	function deleteNewsImg($id)
	{
		$sql = "update go_news set img_path = '' where id = " . $id;
		$this->mysqli->query($sql);
	}
	
	function updateNews($id, $title, $text, $dt, $imgPath)
	{
		if($imgPath == "")
		{ 
			$imgPath = " img_path";
		}
		else
		{
			$imgPath = "'" . $imgPath . "'";
		}

		$sql = "update go_news set 	
		title = '" . $title . "', 
		text = '" . $text . "', 
		dt = '" . $dt . "', 
		img_path = " . $imgPath . " 
		where id = " . $id . ";";
		
		$this->mysqli->query($sql);
	}

	function deleteNews($id)
	{
		$sql = "delete from go_news where id = " . $id . ";";
		$this->mysqli->query($sql);
	}	
	
	function insertNews($title, $text, $dt, $imgPath)
	{
		$sql = "insert into go_news values (
			null, 
			'" . $title . "', 
			'" . $text . "', 
			'" . ($dt != "" ? $dt : strftime("%Y-%m-%d")) . "', 
			'" . $imgPath . 
			"');";
		
		$this->mysqli->query($sql);
	}
	
	function croDate($dt)
	{
		$local = strtotime($dt);
		$local = strftime("%d. %m. %Y.", $local);
		$local = iconv('ISO-8859-2', 'UTF-8', $local);	
		return $local;
	}
	
	function fetchNewsPublic($id)
	{
		$result = $this->mysqli->query("select * from go_news where id = " . $id);
		while($row = $result->fetch_assoc())
		{
			$news = array(
				"title" => $row["title"],
				"text" => str_replace("&", "&amp;", str_replace("##", "", $row["text"])),
				"dt" => $this->croDate($row["dt"]),
				"imgPath" => strlen($row["img_path"]) > 0 ? $row["img_path"] : "../pixel.gif"
			);
		}
		return $news;
	}
	
	function getPatternPos($needle, $haystack)
	{	
		$l = strlen($haystack) - strpos (strrev($haystack), strrev($needle)) - strlen($needle);	
		return ($l + 2) == strlen( $haystack) ? 0 : $l;
	}
	
	function fetchAllPublic()
	{
		$result = $this->mysqli->query("select * from go_news order by dt desc");
		$newsArray = array();
		while($row = $result->fetch_assoc())
		{
			$pos = $this->getPatternPos("##", $row["text"]);
		
			$newsArray[] = array(
				"id" => $row["id"], 
				"title" => $row["title"], 
				"text" => $pos > 0 ? str_replace("&", "&amp;", substr($row["text"], 0, $pos)) . "... " : str_replace("&", "&amp;", $row["text"]),
				"dt" => $this->croDate($row["dt"]), 
				"imgPath" => strlen($row["img_path"]) > 0 ? $row["img_path"] : "pixel.gif",
				"isOverLimit" => $pos > 0 ? "1" : "0",
			);
		}
		
		return $newsArray;
	}
	
	function fetchAll()
	{
		$result = $this->mysqli->query("select * from go_news order by dt desc");
		$newsArray = array();
		while($row = $result->fetch_assoc())
		{
			$newsArray[] = array(
				"id" => $row["id"], 
				"title" => str_replace("&", "&amp;", $row["title"]), 
				"text" => $row["text"], 
				"dt" => $row["dt"],
				"imgPath" => strlen($row["img_path"]) > 0 ? $row["img_path"] : "pixel.gif"
			);
		}
		
		return $newsArray;
	}	

	function fetchLastUpdateDate()
	{
		$date = '31.03.2011';
	
		$result = $this->mysqli->query("select max(dt) as max_dt from go_news");
		$newsArray = array();
		if($row = $result->fetch_assoc())
		{
			$date = $this->croDate($row["max_dt"]);
		}
		
		return $date;
	}

	function connect($userName, $password)
	{
		$this->mysqli = new mysqli("localhost", $userName, $password, "udruga_goli_otok");
		$this->mysqli->set_charset('utf8');
		$this->mysqli->query("set collation_connection = utf8_general_ci");
		$this->mysqli->query("set names UTF-8");
	}
}

?>
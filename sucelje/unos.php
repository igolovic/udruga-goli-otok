<?

// ini_set("display_errors",1);
// error_reporting(E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED);

require("../Config.php");
require("../News.php");
require("../smarty_lib/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = "../smarty/templates";
$smarty->compile_dir = "../smarty/templates_c";
$smarty->cache_dir = "../smarty/cache";
$smarty->config_dir = "../smarty/configs";

$n = new News($userName, $password);

if(isset($_POST["uploadFile"]))
{
	if(isset($_FILES["ifFile"]) && strlen($_FILES["ifFile"]["name"]) > 0)
	{
		// save new
		$fn = basename($_FILES["ifFile"]["name"]);
		$destinationPath = "../news/" . $fn;

		if(!move_uploaded_file($_FILES["ifFile"]["tmp_name"], $destinationPath))
		{
			echo "Greška pri upload-u slike (1).";
			switch ($_FILES["ifFile"] ["error"])
			 {  case 1:
					   print "<p> The file is bigger than this PHP installation allows</p>";
					   break;
				case 2:
					   print "<p> The file is bigger than this form allows</p>";
					   break;
				case 3:
					   print "<p> Only part of the file was uploaded</p>";
					   break;
				case 4:
					   print "<p> No file was uploaded</p>";
					   break;
				default:
						print "<p> Error " . $_FILES["ifFile"] ["error"] . "</p>";
						break;
			 }
		}
		else
		{
			echo "Datoteka je uspješno uploadana pod nazivom " . $fn;
		}
	}	
}

if(isset($_POST["updateNews"]))
{
	$id = $_POST["id"];

	$fn = "";
	if(isset($_FILES["ifImg" . $id]) && strlen($_FILES["ifImg" . $id]["name"]) > 0)
	{
		// delete old if exists
		if($_POST["oldImgPath" . $id]  && strlen($_POST["oldImgPath" . $id]) > 0 && file_exists("../news/" . $_POST["oldImgPath" . $id]))
		{
			unlink("../news/" . $_POST["oldImgPath" . $id]);
		}
		
		$random = rand(0, 1000);
		
		// save new
		$fn = $random . basename($_FILES["ifImg" . $id]["name"]);
		$destinationPath = "../news/" . $fn;
				
/*		echo "t ".filesize($_FILES["ifImg" . $id]["tmp_name"])."<br/>";
		echo "t ".$_FILES["ifImg" . $id]["tmp_name"]."<br/>";
		echo "t ".$destinationPath."<br/>";*/

		if(!move_uploaded_file($_FILES["ifImg" . $id]["tmp_name"], $destinationPath))
		{
			echo "Greška pri upload-u slike (2).";
			switch ($_FILES["ifImg"] ["error"])
			 {  case 1:
					   print "<p> The file is bigger than this PHP installation allows</p>";
					   break;
				case 2:
					   print "<p> The file is bigger than this form allows</p>";
					   break;
				case 3:
					   print "<p> Only part of the file was uploaded</p>";
					   break;
				case 4:
					   print "<p> No file was uploaded</p>";
					   break;
			 }
		}
	}

	$n->updateNews($id, $_POST["title" . $id], $_POST["text" . $id], $_POST["dt" . $id], $fn);
}

if(isset($_POST["deleteImg"]))
{
	$id = $_POST["id"];
	
	$n->deleteNewsImg($id);	
	
	if(isset($_POST["oldImgPath" . $id]) && strlen($_POST["oldImgPath" . $id]) > 0 && file_exists("../news/" . $_POST["oldImgPath" . $id]))
	{
		unlink("../news/" . $_POST["oldImgPath" . $id]);
	}	
}

if(isset($_POST["deleteNews"]))
{
	$id = $_POST["id"];
		
	$n->deleteNews($id);
	
	// delete image if exists
	if(isset($_POST["oldImgPath" . $id]) && strlen($_POST["oldImgPath" . $id]) > 0 && file_exists("../news/" . $_POST["oldImgPath" . $id]))
	{
		unlink("../news/" . $_POST["oldImgPath" . $id]);
	}
}

if(isset($_POST["insertNews"]))
{
	$fn = "";
	if(isset($_FILES["ifImg"]) && strlen($_FILES["ifImg"]["name"]) > 0)
	{
		$random = rand(0,1000);
	
		$fn = $random . basename($_FILES["ifImg"]["name"]);
		$destinationPath = "../news/" . $fn; 

		if(!move_uploaded_file($_FILES["ifImg"]["tmp_name"], $destinationPath))
		{
			echo "Greška pri upload-u slike (3).";
			switch ($_FILES["ifImg"] ["error"])
			 {  case 1:
					   print "<p> The file is bigger than this PHP installation allows</p>";
					   break;
				case 2:
					   print "<p> The file is bigger than this form allows</p>";
					   break;
				case 3:
					   print "<p> Only part of the file was uploaded</p>";
					   break;
				case 4:
					   print "<p> No file was uploaded</p>";
					   break;
				default:
						print "<p> Error " . $_FILES["ifImg"] ["error"] . "</p>";
						break;					   
			 }			
		}
	}
	
	$n->insertNews($_POST["title"], $_POST["text"], $_POST["dt"], $fn);
}

$smarty->assign("newsList", $n->fetchAll());
$smarty->display("unos.tpl");

?>
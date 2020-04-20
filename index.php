<?php

//ini_set('display_errors',1);
//error_reporting(E_ALL);
// Quick and dirty - nije važno sajt je ionako za arhivu
error_reporting(E_ALL ^ E_DEPRECATED);

require('Config.php');
require('News.php');

require('smarty_lib/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'smarty/templates';
$smarty->compile_dir = 'smarty/templates_c';
$smarty->cache_dir = 'smarty/cache';
$smarty->config_dir = 'smarty/configs';

setlocale(LC_ALL, "croatian");

$n = new News($userName, $password);
$smarty->assign("lastUpdated", str_replace(' ', '', $n->fetchLastUpdateDate()));

if(!isset($_GET['task']))
{
	$smarty->assign("isNewsList", "1");
	$smarty->assign("newsList", $n->fetchAllPublic());
	$smarty->assign("about", "lmItem2");
	$smarty->display("headerFooter.tpl");
	return;
}

$task = $_GET['task'];
$tplFileName = $task;
$menuEntryOrdinalNumber = 0;
$mapTaskToOrdinal = array('about'=>'0','facts'=>'1' ,'az'=>'2','informbureau'=>'3','gallery'=>'4','guide'=>'5','anniversary'=>'6', 'literature'=>'7', 'links'=>'8', 'contact'=>'9');

$act = "";
if(isset($_GET["act"]))
{
	$act = $_GET["act"];
}

switch($task)
{
	case "about":
		$menuEntryOrdinalNumber = 0;
		if($act == "news" && isset($_GET["id"]))
		{
			$smarty->assign("isNews", "1");
			$smarty->assign("news", $n->fetchNewsPublic($_GET['id']));		
		}
	break;
		
	case "facts":
		$menuEntryOrdinalNumber = 1;
	break;		
		
	case "az":
		$menuEntryOrdinalNumber = 2;
	break;
		
	case "informbureau":
		$menuEntryOrdinalNumber = 3;
	break;
		
	case "gallery":
		$menuEntryOrdinalNumber = 4;
	break;
		
	case "anniversary":
		$menuEntryOrdinalNumber = 5;
	break;	
		
	case "contact":
		if(isset($_POST["send_msg"]) && isset($_POST["name"]) && isset($_POST["message"])
		&& strlen(trim($_POST["name"])) > 0 && strlen(trim($_POST["message"])) > 0
		)
		{
			$msg = $_POST["message"];
			if(strlen($msg) > 5000)
			{
				$msg = substr($msg, 0, 5000);	
			}
				
			$message = "<table>";
			$message .= "<tr><td>Ime: </td><td>" . $_POST["name"] . "</td></tr>";
			$message .= "<tr><td>E - mail: </td><td>" . $_POST["email"] . "</td></tr>";
			$message .= "<tr><td>Poruka: </td><td>" . $msg . "</td></tr>";
			$message .= "</table>";
	
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			if(mail("dummy@dummy.dummy", "Udruga Goli otok - nova poruka", $message, $headers))
			{
				$smarty->assign("mailMessage", "Poruka je uspješno poslana, hvala.");
				$smarty->assign("mailMsgVisible", "inline-block");
			}
			else{ err(); }
		}
		else
		{
			if(isset($_POST["send_msg"])){ err(); }
		}
	break;
}
	
if($act != "" && $act != "news")
{
	$act = $_GET['act'];
	$tplFileName .= "_" . $act;
}
	
$tplFileName = "smarty/templates/" . $tplFileName . ".tpl";
$smarty->assign('mCol', file_get_contents($tplFileName));

$smarty->assign($task, "lmItem2");
$smarty->display('headerFooter.tpl');

function err()
{
	global $smarty;
	$smarty->assign("mailMessage", "Greška, slanje poruke nije uspjelo. Provjerite da li ste unijeli ime i sadržaj poruke.");
	$smarty->assign("mailMsgVisible", "inline-block");
}

?>
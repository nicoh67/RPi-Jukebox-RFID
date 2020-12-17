#!/usr/bin/php
<?php
$folder_lang = '';
if(file_exists(dirname(dirname(dirname(__FILE__))) .'/settings/Lang')) {
	$folder_lang = file_get_contents(dirname(dirname(dirname(__FILE__))) .'/settings/Lang') .'/';
}

$wlanDevice = "wlan0";
//$wlanDevice = "wlp4s0"; // this is the device name on my ubuntu, just for testing 

$wifiIp = exec("sudo ifconfig ".$wlanDevice." | grep \"inet \" | awk -F'[: ]+' '{ print $3 }'");
//$wifiIp = "0.123.456.789"; // testing all possibly numbers

$array = str_split($wifiIp);
$concat = "";
foreach ($array as $char) {
 $mp3 = "number0".$char.".mp3";
 if(file_exists($folder_lang . $mp3))
  $mp3 = $folder_lang . $mp3;
 $concat .= $mp3 ."|";
}
$concat .= "silence-0.5sec.mp3";

// create and read mp3
exec("sudo ffmpeg -i \"concat:".$concat."\" -acodec copy WifiIp.mp3; sudo mpg123 WifiIp.mp3");
// delete mp3 after playout
exec("sudo rm WifiIp.mp3");

?>

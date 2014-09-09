<?php
function get_ip()
{   if (!empty($_SERVER['HTTP_CLIENT_IP']))    {        $ip=$_SERVER['HTTP_CLIENT_IP'];    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    {        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];    }
    else    {        $ip=$_SERVER['REMOTE_ADDR'];    }    return $ip;
}

function resolve_mac_for_ip($ip){
$found_mac = NULL;
$f_in = fopen("/proc/net/arp","r");
if ($f_in != NULL){
fgets($f_in);
while (!feof($f_in)){
$t = fgets($f_in);
if ($t != NULL){
$str_split = preg_split ("/[\s]+/", $t);
if ($str_split[0]==$ip) {
$found_mac = $str_split[3];
break;
};
};
};
fclose($f_in);
};
return $found_mac;
}

//http://192.168.0.65/mod-lan.php?mode=PIR&address=192.168.0.246&vale1=2&vale2=2&vale3=2&vale4=2

include 's-head.php';

$timereal = time()+$timezone;   
$date_today = date("Y.m.d",$timereal); 
$time_today = date("H:i:s",$timereal); 



if(isset($_GET['mode']) && $_GET['address']==get_ip())
{
$ipaddress=get_ip();


$read=$_GET['mode'].",".$ipaddress.",".$_GET['vale1'].",".$_GET['vale2'].",".$_GET['vale3'].",".$_GET['vale4'].",".$_GET['mode'];



echo "MAC:".resolve_mac_for_ip(get_ip())." "; 


$mode=$_GET['mode'];
$modecontrol=$_GET['mode'];
$vale1=$_GET['vale1'];	
$vale2=$_GET['vale2'];	
$vale3=$_GET['vale3'];	
$vale4=$_GET['vale4'];	
$address=	$ipaddress;

list($mode, $address, $vale1, $vale2, $vale3, $vale4, $modecontrol) = sscanf($read, "%[^','],%[^','],%[^','],%[^','],%[^','],%[^','],%s");

	 include 'lib-mod-run.php';	   

}







?>
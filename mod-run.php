#!/usr/local/bin/php

<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
 include 's-head.php';
 include "ucs2cp1251.class.php";
 echo "-> ".$date_today." ".$time_today." Starting MOD-RS485 ............................................\n";
 
// проверка запущенной копии
$process = shell_exec('ps ax | grep mod-run.php');if (substr_count($process,"/html/mod-run.php")>1){echo "-> ".$date_today." ".$time_today." .......... Process is already running.\n";}else {
// проверка запущенной копии

//Проверка подключения устройства и устоновка компорта
$result= mysqli_query($con, "SELECT * FROM data WHERE id='5'"); $row=mysqli_fetch_array($result); $namedev = $row['state'];
list ($nameport, $numport) = dev_detect($namedev); 
echo "-> ".$date_today." ".$time_today." Device name: ".$nameport." Port: ".$numport."\n"; 
if($nameport) {
//Проверка подключения устройства и устоновка компорта

//префикс ком порта
$resulttty= mysqli_query($con, "SELECT * FROM data WHERE id='19'"); $rowtty=mysqli_fetch_array($resulttty); $nametty = $rowtty['state'];
//префикс ком порта

//префикс ком порта
$ipservelocal= mysqli_query($con, "SELECT * FROM data WHERE id='21'"); $rowipservelocal=mysqli_fetch_array($ipservelocal); $nameipservelocal = $rowipservelocal['state'];
//префикс ком порта

//попытка открыть порт

if(fopen("/dev/".$nametty.$numport."","w+")){echo "-> OPEN COM PORT OK\n";}
else {echo "-> ERROR NO OPEN COM PORT\n";break;}

//попытка открыть порт


// отключаем режим эхо на ком порте
$logist=exec("stty  -F /dev/".$nametty.$numport." -echo");
// отключаем режим эхо на ком порте
	



// подключение адаптера
include "PhpSerial.php";
$serial = new phpSerial;
$serial->deviceSet("/dev/".$nametty.$numport."");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none");
$serial->deviceOpen();
// подключение адаптера
$read='';

$previousMillis = 0;  
$previousMilliswrit = 0; 


while (true)  //бесконечный цикл
{

//назначаем переменные даты и времени
$timereal = time()+$timezone;   //в формате Unixtime + часовой пояс
$date_today = date("Y.m.d",$timereal); 
$time_today = date("H:i:s",$timereal); 
//echo " -> Timereal: ".$timereal."; "; echo "Date_today: ".$date_today."; "; echo "Time_today: ".$time_today."\n\r; "; 
$weekdays = date('w');
$monthdays = date('d');
$month= date('n');
//назначаем переменные даты и времени


$currentMilliswrit = time();
if($currentMilliswrit - $previousMilliswrit > 0 ) 
{                                                            
$previousMilliswrit = $currentMilliswrit;  
//пишем в базу если адаптер подключен
mysqli_query($con,"UPDATE data SET state='$timereal' WHERE id='12'");  
//пишем в базу если адаптер  подключен
}






//читаем значение с ком порта управляющего устройства
$read = $serial->readPort();
if ($read) 
{                 
	//делаем разбор полученных данных из устройства
	list($mode, $address, $vale1, $vale2, $vale3, $vale4, $modecontrol) = sscanf($read, "%[^','],%[^','],%[^','],%[^','],%[^','],%[^','],%s");
	if ($mode == $modecontrol)
	{
	
	
	

		   
	 include 'lib-mod-run.php';	   
		   
		   
		   
		   
   }
}





//-----------------------отправка команд с задержкой 1000 милисикунд----------------
$currentMillis = round(microtime(1)*1000);
if($currentMillis - $previousMillis > 1000 ) 
{                                                            
$previousMillis = $currentMillis; 

$resmoderegim = mysqli_query($con,"SELECT * FROM `type` WHERE regim=0 OR regim=3");
$moderegim="";
if($resmoderegim) {   while($rowmoderegim = mysqli_fetch_assoc($resmoderegim)) 
{   $moderegim.="'".$rowmoderegim['mode']."',";			}
$moderegim = substr($moderegim,0,-1);
//echo $moderegim;
}

$res6 = mysqli_query($con,"SELECT * FROM `run` WHERE run ='0' AND mode IN ($moderegim) ORDER BY id DESC LIMIT 1");
if($res6) {   while($row6 = mysqli_fetch_assoc($res6)) 
   {	
    $vale_mode=$row6['mode'];
	$vale_address=$row6['address'];
	$vale_run=$row6['vale'];	
	$vale_run1=$row6['vale1'];	
	$vale_run2=$row6['vale2'];	
	$vale_run3=$row6['vale3'];	
	$vale_run4=$row6['vale4'];	

    $vale_id=$row6['id'];		
	


if (ip2long($vale_address)){    
 echo "-> ".$date_today." ".$time_today.' Send LAN commands  http://'.$vale_address.'/mod-lan.php?mode='.$vale_mode.'&address='.$nameipservelocal.'&vale1='.$vale_run1.'&vale2='.$vale_run2.'&vale3='.$vale_run3.'&vale4='.$vale_run4."\n";

file_get_contents('http://'.$vale_address.'/mod-lan.php?mode='.$vale_mode.'&address='.$nameipservelocal.'&vale1='.$vale_run1.'&vale2='.$vale_run2.'&vale3='.$vale_run3.'&vale4='.$vale_run4.'');
}
else {
$serial->sendMessage($vale_run);	
}
	
	mysqli_query($con,"UPDATE run SET run ='1' WHERE id = '$vale_id'");
   }
mysqli_free_result($res6); } 



}
//-----------------------отправка команд с задержкой 1000 милисикунд----------------



 


//Проверка на доступность устройства если не доступно выключаем программу и ждем перезапуск
list ($nameport2, $numport2) = dev_detect($namedev); 
if($numport!=$numport2){break;}
//Проверка на доступность устройства если не доступно выключаем программу и ждем перезапуск






usleep(1);
}  //конец цикла




}
//сообщаем о недоступности устройства
else {echo "-> ".$date_today." ".$time_today." "." No connected devices.\n";}; 
}

?>


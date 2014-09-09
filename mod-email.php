#!/usr/local/bin/php

<?php 
include 's-head.php';
// проверка запущенной копии
$process = shell_exec('ps ax | grep mod-email.php');if (substr_count($process,"/html/mod-email.php")>1){echo "-> ".$date_today." ".$time_today." .......... Process is already running.\n";}else {



include "ucs2cp1251.class.php";
include "email.class.php";
echo "-> ".$date_today." ".$time_today." Starting MOD-EMAIL ............................................";
	
	

$previousMillis = 0;  
while (true)  //бесконечный цикл
{


$timereal = time()+$timezone;   //в формате Unixtime + часовой пояс
$currentMilliswrit = time();

//пишем в базу если адаптер подключен
mysqli_query($con,"UPDATE data SET state='$timereal' WHERE id='14'");  
//пишем в базу если адаптер  подключен



//отправка команд с задержкой 500 милисикунд
$currentMillis = round(microtime(1)*1000);
if($currentMillis - $previousMillis > 500 ) 
{                                                            
$previousMillis = $currentMillis; 
$res = mysqli_query($con,"SELECT * FROM `run` WHERE run ='0' AND mode ='EML'  ORDER BY id DESC LIMIT 1");
if($res) {   while($row = mysqli_fetch_assoc($res)) 
   {	
	$vale_run=$row['vale'];	
    $vale_id=$row['id'];		
	mysqli_query($con,"UPDATE run SET run ='1' WHERE id = '$vale_id'");
	
	list($mode, $address, $vale1, $vale2, $vale3, $vale4, $modecontrol) = sscanf($vale_run, "%[^','],%[^','],%[^','],%[^','],%[^','],%[^','],%s");
	
	
	
	
	$result1= mysqli_query($con, "SELECT * FROM data WHERE id='7'"); $row1=mysqli_fetch_array($result1); $mailaddressserver = $row1['state'];
	$result2= mysqli_query($con, "SELECT * FROM data WHERE id='8'"); $row2=mysqli_fetch_array($result2); $mailportserver = $row2['state'];
	$result3= mysqli_query($con, "SELECT * FROM data WHERE id='9'"); $row3=mysqli_fetch_array($result3); $maillogin = $row3['state'];
	$result4= mysqli_query($con, "SELECT * FROM data WHERE id='10'"); $row4=mysqli_fetch_array($result4); $mailpwd = $row4['state'];
	$result5= mysqli_query($con, "SELECT * FROM data WHERE id='11'"); $row5=mysqli_fetch_array($result5); $mailfrom = $row5['state'];
	
	email_send($mailaddressserver,$mailportserver,$maillogin,$mailpwd ,$mailfrom ,$vale1, utf8_to_win($vale2), utf8_to_win($vale3));
	echo "-> ".$date_today." ".$time_today." E-mail removal from the database of used commands.\n\r";
	
	
	
   }
mysqli_free_result($res); } 
}
//отправка команд с задержкой 300 милисикунд


usleep(100);
}	//бесконечный цикл
	
	
	
}	
	

	
?>
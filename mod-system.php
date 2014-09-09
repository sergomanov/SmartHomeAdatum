#!/usr/local/bin/php

<?php 
include 's-head.php';
// проверка запущенной копии
$process = shell_exec('ps ax | grep mod-system.php');if (substr_count($process,"/html/mod-system.php")>1){echo "-> ".$date_today." ".$time_today." .......... Process is already running.\n";}else {



include "ucs2cp1251.class.php";

echo "-> ".$date_today." ".$time_today." Starting MOD-SYSTEM ............................................";
	
	

$previousMillis = 0;  
while (true)  //бесконечный цикл
{

$timereal = time()+$timezone;   //в формате Unixtime + часовой пояс
$currentMilliswrit = time();

//пишем в базу если адаптер подключен
mysqli_query($con,"UPDATE data SET state='$timereal' WHERE id='3'");  
//пишем в базу если адаптер  подключен



//отправка команд с задержкой 1000 милисикунд (1 сек)
$currentMillis = round(microtime(1)*1000);
if($currentMillis - $previousMillis > 1000 ) 
{                                                            
$previousMillis = $currentMillis; 


//---------------------------------- Выключение перезагрузка ------------------------------------------------------------------
$result= mysqli_query($con, "SELECT * FROM data WHERE id='16'"); $row=mysqli_fetch_array($result); $commands = $row['state'];
 
if($commands==1){
mysqli_query($con,"UPDATE data SET state='0' WHERE id='16'");  
$name = exec('sudo shutdown -h now');
echo " -> ".$name."\n\r";
}

if($commands==2){
mysqli_query($con,"UPDATE data SET state='0' WHERE id='16'"); 
$name = exec('sudo reboot');
echo " -> ".$name."\n\r";
}

if($commands==3){
mysqli_query($con,"UPDATE data SET state='0' WHERE id='16'"); 
$name = exec('sudo killall -9 php');echo " -> ".$name."\n\r";

}
//---------------------------------- Выключение перезагрузка ------------------------------------------------------------------




//-------------------------------------Список USB устройств --------------------------------------------------------------------
$usb = glob("/dev/ttyUSB*", GLOB_NOSORT);
natsort($usb);
foreach ($usb as $row) 
{
$los = substr($row, 5);
$numport = substr($row, 11);
exec('dmesg | grep '.$los.' ', $results); 
foreach ($results as $row) 
{
$pos = strpos($row, ": ");
$nameport = substr($row, $pos+2,-24);
}
//echo $nameport." -> ttyUSB".$numport."<br>";
$a.=$nameport." -> ttyUSB".$numport."<br>";
}
$Zol=$a;
mysqli_query($con,"UPDATE data SET state='$Zol' WHERE id='20'"); 
$a='';
$Zol='';
//-------------------------------------Список USB устройств --------------------------------------------------------------------


//---------------------------------------------------------------планировщик-----------------------------------------------------------
$res = mysqli_query($con,"SELECT * FROM `scheduler`");
if($res) {   while($row = mysqli_fetch_assoc($res)) 
 {
    
$datetimeone=strtotime($row['date']." ".$row['time'])+$timezone;
$timeone=strtotime($row['time'])+$timezone;
$datetimein=strtotime($row['datein']." ".$row['timein'])+$timezone;
$datetimeout=strtotime($row['dateout']." ".$row['timeout'])+$timezone;
//По таймеру
if($row['switch']==1 && $row['type']==1 && $datetimein < $timereal && $datetimeout > $timereal && ($row['timerun']+$row['timer']*60)<$timereal)
{
$sch_id=$row['id'];
mysqli_query($con,"UPDATE scheduler SET timerun='$timereal',run ='1' WHERE id = '$sch_id'");
echo "-> ".$date_today." ".$time_today." worked condition type 1 Timer.\n\r";
} 
//Один раз
if($row['switch']==1 && $row['type']==2 && $datetimeone <$timereal )
{
$sch_id=$row['id'];
mysqli_query($con,"UPDATE scheduler SET timerun='$timereal',run ='1',switch ='0' WHERE id = '$sch_id'");
echo "-> ".$date_today." ".$time_today." worked condition type 2 Once.\n\r";
}
//Ежедневно
if($row['switch']==1 && $row['type']==5 && $timeone < $timereal && $row['timerun']+86400 < $timereal)
{
$sch_id=$row['id'];
mysqli_query($con,"UPDATE scheduler SET timerun='$timereal',run ='1' WHERE id = '$sch_id'");
echo "-> ".$date_today." ".$time_today." worked condition type 5 Daily.\n\r";
}
//Еженедельно
if($row['switch']==1 && $row['type']==6 && $timeone < $timereal && (strpos($row['weekdays'], $weekdays)!== false) && $row['timerun']+86400 < $timereal)
{
$sch_id=$row['id'];
mysqli_query($con,"UPDATE scheduler SET timerun='$timereal',run ='1' WHERE id = '$sch_id'");
echo "-> ".$date_today." ".$time_today." worked condition type 6 Weekly.\n\r";
}
//Ежемесячно
if($row['switch']==1 && $row['type']==7 && (in_array($monthdays, explode(',',$row['monthdays']))!== false) && $timeone < $timereal && $row['timerun']+86400 < $timereal)
{
$sch_id=$row['id'];
mysqli_query($con,"UPDATE scheduler SET timerun='$timereal',run ='1' WHERE id = '$sch_id'");
echo "-> ".$date_today." ".$time_today." worked condition type 7 Monthly.\n\r";
}

//Ежегодно
if($row['switch']==1 && $row['type']==8 && (in_array($monthdays, explode(',',$row['monthdays']))!== false)   && (in_array($month, explode(',',$row['month']))!== false) && $timeone < $timereal && $row['timerun']+86400 < $timereal)
{
$sch_id=$row['id'];
mysqli_query($con,"UPDATE scheduler SET timerun='$timereal',run ='1' WHERE id = '$sch_id'");
echo "-> ".$date_today." ".$time_today." worked condition type 8 yearly.\n\r";
}
    }
 mysqli_free_result($res); } 
//---------------------------------------------------------------планировщик-----------------------------------------------------------



//--------------------------------------------------добовление в базу команд-----------------------------------------------------------
$res3 = mysqli_query($con,"SELECT * FROM `scheduler` WHERE switch ='1' AND run ='1'");
if($res3) {   while($row3 = mysqli_fetch_assoc($res3)) 
   {
		$sch_id3=$row3['id'];
		$commands_id3=$row3['commands'];
		echo "-> ".$date_today." ".$time_today." Running commands id:".$commands_id3."\n\r";
		mysqli_query($con,"UPDATE scheduler SET timerun='$timereal',run ='0' WHERE id = '$sch_id3'");
		$res4 = mysqli_query($con,"SELECT * FROM `commands` WHERE id IN ($commands_id3)");
			if($res4) {   while($row4 = mysqli_fetch_assoc($res4)) 
				   {
				    if($row4['vale1']){ $vale1=$row4['vale1'];}	   else	   {$vale1=0;}
				    if($row4['vale2']){ $vale2=$row4['vale2'];}	   else	   {$vale2=0;}
					if($row4['vale3']){ $vale3=$row4['vale3'];}	   else	   {$vale3=0;}
				    if($row4['vale4']){ $vale4=$row4['vale4'];}	   else	   {$vale4=0;}
				   
				  $commands_run=$row4['mode'].",".$row4['address'].",".$vale1.",".$vale2.",".$vale3.",".$vale4.",".$row4['mode']."\n\r";
				  $mode_run=$row4['mode'];	
				  $address_run=$row4['address'];	
				  $vale1_run=$row4['vale1'];	
				  $vale2_run=$row4['vale2'];
				 $vale3_run=$row4['vale3'];
				 $vale4_run=$row4['vale4']; 
				  mysqli_query($con,"INSERT INTO run (mode,vale,address,vale1,vale2,vale3,vale4,unixtime) VALUES ('$mode_run','$commands_run','$address_run','$vale1_run','$vale2_run','$vale3_run','$vale4_run','$timereal')");
					}	
				mysqli_free_result($res4); } 
    }
 mysqli_free_result($res3); } 
//--------------------------------------------------добовление в базу команд-----------------------------------------------------------

//----------------------------------Выполнение активации правил по команде ACT ---------------------------------------------------------                                                       
$res5 = mysqli_query($con,"SELECT * FROM `run` WHERE run ='0' AND mode ='ACT'  ORDER BY id DESC LIMIT 1");
if($res5) {   while($row5 = mysqli_fetch_assoc($res5)) 
   {	
	$vale_run5=$row5['vale1'];
    $vale2_run5=$row5['vale2'];	
    $vale_id5=$row5['id'];		

	mysqli_query($con,"UPDATE scheduler SET switch ='$vale2_run5' WHERE id = '$vale_run5'");
    
	mysqli_query($con,"DELETE FROM run WHERE id='$vale_id5'");
   }
mysqli_free_result($res5); } 
//----------------------------------Выполнение активации правил по команде ACT ---------------------------------------------------------   


}
//отправка команд с задержкой 300 милисикунд


usleep(100);
}	//бесконечный цикл
	
	
	
}	
	

	
?>
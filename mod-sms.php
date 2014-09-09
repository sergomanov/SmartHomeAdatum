<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
include 's-head.php';
include "ucs2cp1251.class.php";
include "PhpSerial.php";


// проверка запущенной копии
$process = shell_exec('ps ax | grep mod-sms.php');if (substr_count($process,"/html/mod-sms.php")>1){echo "-> ".$date_today." ".$time_today." .......... Process is already running.\n";}else {
// проверка запущенной копии

//Проверка подключения устройства и устоновка компорта
$result= mysqli_query($con, "SELECT * FROM data WHERE id='17'"); $row=mysqli_fetch_array($result); $namedev = $row['state'];
list ($nameport, $numport) = dev_detect($namedev); 
echo "-> ".$date_today." ".$time_today." -> Name: ".$nameport." Port: ".$numport."\n"; 
if($nameport) {
//Проверка подключения устройства и устоновка компорта

//префикс ком порта
$resulttty= mysqli_query($con, "SELECT * FROM data WHERE id='19'"); $rowtty=mysqli_fetch_array($resulttty); $nametty = $rowtty['state'];
//префикс ком порта

// подключение адаптера
$serial = new phpSerial;
$serial->deviceSet("/dev/".$nametty.($numport-1)."");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none");
$serial->deviceOpen();
// подключение адаптера

// отключаем режим эхо на ком порте
exec("stty  -F /dev/".$nametty.($numport-1)." -echo");
// отключаем режим эхо на ком порте




$serial->sendMessage("AT+CFUN=1\n");                           //Включить модем
$serial->sendMessage("AT+CMGF=0\n"); 							//Цифровой режим
$serial->sendMessage("AT+CPMS=\"ME\",\"SM\",\"MT\""); 				// от куда читаем смс
$serial->sendMessage("AT+CLIP=1\n");                    			//Включение АОН



//$serial->sendMessage("ATD+79233939408;\n");                    			//Включение АОН



$CALQ=0;
$previousMillis = 0;  

while (true)  //бесконечный цикл
{


//назначаем переменные даты и времени
$timereal = time()+$timezone;   //в формате Unixtime + часовой пояс
$date_today = date("Y.m.d",$timereal); 
$time_today = date("H:i:s",$timereal); 
//echo " -> Timereal: ".$timereal."; "; echo "Date_today: ".$date_today."; "; echo "Time_today: ".$time_today."\n\r; "; 
//назначаем переменные даты и времени

//пишем в базу если адаптер подключен
mysqli_query($con,"UPDATE data SET state='$timereal' WHERE id='13'");  
//пишем в базу если адаптер  подключен







$serial->sendMessage("AT+CMGL=4\n\r"); // чтение смс.

$read = $serial->readPort();
if ($read) 
	{
	
	
$currentMillis = round(microtime(1)*1000);
if($currentMillis - $previousMillis > 10000 ) //10 секунд
{                                                            
$previousMillis = $currentMillis; 


//отправка смс с задержкой 500 милисикунд

$res = mysqli_query($con,"SELECT * FROM `run` WHERE run ='0' AND mode ='SMS'  ORDER BY id DESC LIMIT 1");
if($res) {   while($row = mysqli_fetch_assoc($res)) 
   {	
	$numb_in=$row['vale1'];	   //номер телефона
	$dat_in=$row['vale2'];	 // текст сообщения
	$resultsmsc_numb= mysqli_query($con, "SELECT * FROM data WHERE id='18'"); $rowsmsc_numb=mysqli_fetch_array($resultsmsc_numb); $smsc_numb = $rowsmsc_numb['state']; //номер смс центра
	echo "-> ".$date_today." ".$time_today." Send SMS to number ".$numb_in." SMS center ".$smsc_numb." text ".$dat_in."\n ";
	$textsms = utf8_to_win($dat_in);
	$lengthsms = ATSMS($numb_in, $textsms);	
	$encodesms = sendSMS($smsc_numb, $numb_in, $textsms);		
	$serial->sendMessage("AT+CMGS=".$lengthsms."\n");
	$serial->sendMessage($encodesms);
	$serial->sendMessage(chr(26));
	$vale_id=$row['id'];		
	mysqli_query($con,"DELETE FROM run WHERE id='$vale_id'");			// удаляем отправленную смс
	echo "-> ".$date_today." ".$time_today." Removal from the database of used commands.\n\r";
	
   }
mysqli_free_result($res); } 

//отправка смс с задержкой 300 милисикунд







$serial->sendMessage("AT+CSQ\n");			//Уровень сигнала
}
	
	
	
	
	
	
	
	
	

//echo $read;

//-----------------------чтение смс----------------------------------------------------------------------------
if(strpos($read, "+CMGL")){
echo "\n\r--------------------===============================-----------------------\n\r";				
$colstr = substr_count($read,"+CMGL"); 	echo "KOL: ".$colstr."\n\r";	
$lensrt = strlen($read); echo "LEN: ".$lensrt."\n\r";
echo "\n\r--------------------===============================-----------------------\n\r";	
$dlina =0;
$num = 0;	
$dlinacode=0;
while ($num <= $colstr-1) {
echo "NUM: ".$num."; "; 
$begin = strpos($read, "+CMGL",$dlina);
$end = strpos($read, "0791",$dlina);
$dlina=$end+5;
$string = substr($read, $begin+7, ($end-$begin-7));
//echo $string."\n"; 
$ends = strrpos($string, ",");
$colsimcod = floatval(substr($string, $ends+1,  ($ends+ $end-1)))*2+16;
echo "Colsimcod: ".$colsimcod."; "; 
$begincode = strpos($read, "0791",$dlinacode);
$dlinacode=$begincode+$colsimcod;
//echo "begincode: ".$begincode."; \n"; 
$codepdu = substr($read, $begincode, $colsimcod );
echo "CODE: ".$codepdu."; \n"; 
list ($telnumber, $smsdec) = sms_decode($codepdu); 
$smsdec=CP1251toUTF8($smsdec);
echo " -> Telephone: ".$telnumber." SMS: ".$smsdec."\n"; 
mysqli_query($con,"INSERT INTO developments (mode, address, vale1, vale2, vale3, vale4, date, time,unixtime) VALUES ('SMS', '00000000', '$telnumber', '$smsdec', '', '', '$date_today', '$time_today', '$timereal')");
  $serial->sendMessage("AT+CMGD=".$num."\n"); 
$num++;
 }
  }
 //-----------------------чтение смс----------------------------------------------------------------------------
 
 
 //-----------------------Обработка звонков----------------------------------------------------------------------------
 if(strpos($read, "+CLIP")){
$CALQ=$CALQ+1;
$begin = strpos($read, "+CLIP");
$end = strpos($read, ",145");
$string = substr($read, $begin+9, $end-$begin-10);
echo "RING: ".$string."\n ";
if($CALQ>2){
mysqli_query($con,"INSERT INTO developments (mode, address, vale1, vale2, vale3, vale4, date, time,unixtime) VALUES ('RING', '00000000', '$string', '', '', '', '$date_today', '$time_today', '$timereal')");
  $serial->sendMessage("ATH0\n"); 
  $CALQ=0;
  }
 }
 //-----------------------Обработка звонков----------------------------------------------------------------------------
 
 //-----------------------Качество связи----------------------------------------------------------------------------
  if(strpos($read, "+CSQ")){

$begin = strpos($read, "+CSQ");

$string = substr($read, $begin+6, 2);
$string = floor(($string/31)*100);
if($string ==99){$string="0";}
echo "-> ".$date_today." ".$time_today." Definition quality of communication: ".$string."\n ";
mysqli_query($con,"UPDATE data SET state='$string' WHERE id='15'"); 

 }
 //-----------------------Качество связи----------------------------------------------------------------------------
 

}
	
//Проверка на доступность устройства если не доступно выключаем программу и ждем перезапуск
list ($nameport2, $numport2) = dev_detect($namedev); 
if($numport!=$numport2){break;}
//Проверка на доступность устройства если не доступно выключаем программу и ждем перезапуск	

usleep(100);

} //конец цикла
}

//сообщаем о недоступности устройства
else {echo "-> ".$date_today." ".$time_today." "." No connected devices.\n";}; 
}





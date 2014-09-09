#!/usr/local/bin/php
<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1); 

// отключаем режим эхо на ком порте
exec("stty  -F /dev/ttyUSB0 -echo");
// отключаем режим эхо на ком порте

// подключение адаптера
include "PhpSerial.php";
$serial = new phpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none");
$serial->deviceOpen();
// подключение адаптера





while (true)  //бесконечный цикл
{

//читаем значение с ком порта управляющего устройства
$read = $serial->readPort();
if ($read) 
{

echo $read;
}

usleep(1);
}  


?>


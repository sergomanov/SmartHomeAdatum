<?php
// подключение к базе mysql
include_once "mysql";
$con=mysqli_connect($db_host,$db_login,$db_passwd,$db_name);
$con->set_charset("utf8"); // здесь
if (mysqli_connect_errno()) {  echo "-> Failed to connect to MySQL: " . mysqli_connect_error();}
// подключение к базе mysql

//настройка часового пояса
date_default_timezone_set('Etc/GMT');
$result= mysqli_query($con, "SELECT * FROM data WHERE id='4'");$row=mysqli_fetch_array($result);if($row){$timezone = $row['state'];}
//настройка часового пояса
		
$imyaStranici = basename($_SERVER['PHP_SELF']);
$timereal = time()+$timezone;   //в формате Unixtime + часовой пояс
$date_today = date("Y.m.d",$timereal); 
$time_today = date("H:i:s",$timereal); 

?>
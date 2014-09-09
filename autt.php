<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>
<?php
include_once 'auth-conf.php';
$auth = new auth(); //~ Создаем новый объект класса
if ($auth->check()) 
{
$login_user=$_SESSION['login_user'];
$mail_user=$_SESSION['mail_user'];

$rule1_user=$_SESSION['rule1'];
$rule2_user=$_SESSION['rule2'];
$rule3_user=$_SESSION['rule3'];
$rule4_user=$_SESSION['rule4'];
$rule5_user=$_SESSION['rule5'];
$rule6_user=$_SESSION['rule6'];
}
else { $login_user=""; header("Location: index.php");}

if($imyaStranici=="setting.php" && $rule1_user!='1'){  header("Location: 404.php");}
if($imyaStranici=="scheduler.php" && $rule2_user!='1'){  header("Location: 404.php");}
if($imyaStranici=="editpu.php" && $rule5_user!='1'){  header("Location: 404.php");}
if(($imyaStranici=="type.php" OR $imyaStranici=="namedev.php" OR $imyaStranici=="commands.php") && $rule3_user!='1'){  header("Location: 404.php");}
if($imyaStranici=="users.php" && $rule4_user!='1'){  header("Location: 404.php");}
if($rule6_user!='1'){  $auth->exit_user();} 

?>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Adatum+ - системы контроля помещений</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="icon" href="css/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon">

<meta content="" name="description" />
<meta content="" name="author" />
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Adatum - системы контроля помещений</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link rel="stylesheet" type="text/css" media="all" href="css/googlefont.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/whhg.css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script> 
<link rel="icon" href="css/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon">

</head>
<body class="error-body no-top lazy"  data-original="assets/img/work.jpg"  style="background-image: url('css/work.jpg');   background-size:cover;    background-repeat:repeat;    background-position:top;"> 
<div class="container">
  <div class="row login-container animated fadeInUp">  
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
		 <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10" style="text-shadow: #4B8BA0 0 0 10px;"> 
          <h2 class="normal">Open platform room automation</h2>
          <p>Добро пожаловать в систему автоматизации и управления помещениями.<br></p>
           <p>Welcome to the automation and management of premises.</p><br>
 
		  
		   


		  <p >По умолчанию Пользователь: admin пароль :admin</p>
		  <p> Default user: admin password: admin</p>
		 
		<!--  <button type="button" class="btn btn-primary btn-cons" id="login_toggle">Авторизация</button> -->
        </div>
		<div class="tiles grey p-t-20 p-b-20 text-black">
       <form id="frm_login" class="animated fadeIn" method="post">      
	   <?php
include 's-head.php';
include_once 'auth-conf.php';
$r='';
$auth = new auth(); //~ Создаем новый объект класса
if (isset($_POST['send'])) {	if (!$auth->authorization()) {		$error = $_SESSION['error'];		unset ($_SESSION['error']);	}}
if (isset($_GET['exit'])) $auth->exit_user();
if ($auth->check()) header("Location: pu.php");
else {	if (isset($error)) $r.=' <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">'.$error.' ';
	$r.='	   <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6 "><input type="text" name="login" placeholder="Пользователь" class="form-control"  value="admin" /></div>
                      <div class="col-md-6 col-sm-6"><input type="password" placeholder="Пароль"  class="form-control" name="passwd" value="admin" id="" /></div>
					  <br> <br><button class="btn btn-primary btn-cons btn-sm btn-small  btn-success pull-right" style="padding: 8px 12px;" id="login_toggle"  type="submit" value="send" name="send"><i class="icon-enter" ></i></button></div>
	';}	print $r;
?>
			  </form>
		</div>   
      </div>   
  </div>
</div>
</body>
</html>
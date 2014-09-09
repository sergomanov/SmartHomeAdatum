<!DOCTYPE html>
<html>
<head>
<?php	

 include 's-head.php';
 include 's-lib.php'; 
  include 'autt.php';
 include_once 'auth-conf.php';
 ?>

<link rel="stylesheet" type="text/css" media="all" href="css/googlefont.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/whhg.css" />
<link href="css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link href="css/select2.css" rel="stylesheet"/>
<link href="css/jquery-ui-timepicker-addon.css" rel="stylesheet"/>
<link href="css/jquery-ui.css" rel="stylesheet"/>

<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/breakpoints.js" type="text/javascript"></script> 
<script src="js/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="js/pace.min.js" type="text/javascript"></script>  
<script src="js/jquery.sidr.min.js" type="text/javascript"></script> 	
<script src="js/jquery.animateNumbers.js" type="text/javascript"></script> 
<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="js/s-core.js" type="text/javascript"></script> 
<script src="js/s-chat.js" type="text/javascript"></script> 
<script src="js/s-demo.js" type="text/javascript"></script> 
<script src="js/select2.js"></script>
	

</head>
<form name="myForm" method="post" >
<body class="inner-menu-always-open">
<?php	 include 's-tophead.php'; ?>
<div class="page-container row-fluid"> 
<div class="page-sidebar mini mini-mobile" id="main-menu" data-inner-menu="1">
<?php	 include 's-slidebar.php'; ?>
<?php	 include 's-settmenu.php'; ?> 
</div>
<a href="#" class="scrollup">Scroll</a>
  <div class="page-content"> 
    <div class="clearfix"></div>
    <div class="content">    

	 
	 <div class="row"  id="inbox-wrapper">
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							
							 <div class="row-fluid" >
							
								
								<div id="email-list">		


			<br>
			<input  type="hidden"  name="id_user" id="id_user" class="form-control"  placeholder="">
			<input  type="hidden"  name="rowtypen" id="rowtypen" class="form-control"  placeholder="">
			
			




		 
				
               			  
		<?php
include_once 'auth-conf.php';
$reg = new auth();  
?>


				<p>Логин </p>
				<input id="login" name="login" type="text" class="form-control" value="<?php echo @$_POST['login'] ?>" placeholder="Логин">
	

				<p>Почта </p>
				<input id="mail" name="mail" type="text" class="form-control" value="<?php echo @$_POST['mail'] ?>" placeholder="Почта">

				
<div id="checkedit" style="display:none">
<br>
				<div  class="checkbox check-default" >
                      <input onclick="showHide('passdiv');" id="cbx" name="cbx" type="checkbox" value="1">
                      <label for="cbx">Сменить пароль</label>
   
                  </div>
 </div>
			


		<div id="passdiv" style="display:block">

				<p>Пароль </p>
				<input id="passwd" name="passwd" type="password" class="form-control" >
				
				<p>Повторите Пароль </p>
				<input id="passwd2" name="passwd2" type="password" class="form-control">

		</div>
				
				
				
				
				
				
				
				<p>Права доступа</p><br>
                    <div class="checkbox check-default">
                      <input id="checkbox1" name="checkbox1" type="checkbox" value="1">
                      <label for="checkbox1">Изменение настроек</label>
   
                  </div>

                    <div class="checkbox check-default">
                      <input id="checkbox2" name="checkbox2" type="checkbox" value="1">
                      <label for="checkbox2">Создание правил</label>
                    </div>

                    <div class="checkbox check-default">
                      <input id="checkbox3" name="checkbox3" type="checkbox" value="1">
                      <label for="checkbox3">Редактирование справочников</label>
                    </div>

                    <div class="checkbox check-default">
                      <input id="checkbox4" name="checkbox4" type="checkbox" value="1">
                      <label for="checkbox4">Редактирование пользователей</label>

					  </div>
					  
					    <div class="checkbox check-default">
                      <input id="checkbox5" name="checkbox5" type="checkbox" value="1">
                      <label for="checkbox5">Настройка панели управления</label>

					  </div>





 
  
<script type="text/javascript">
function showHide (id)
{
var style = document.getElementById(id).style
if (style.display == "none")
style.display = "block";
else
style.display = "none";
} 
</script>
   
   
 
                 
<?php
if (isset($_POST['send'])) {
echo '<div class="alert">              <button class="close" data-dismiss="alert"></button> ';
	if ($reg->reg($_POST['login'], $_POST['passwd'], $_POST['passwd2'], $_POST['mail'], $_POST['checkbox1'], $_POST['checkbox2'], $_POST['checkbox3'], $_POST['checkbox4'], $_POST['checkbox5'])) {
		print '		<h5>Регистрация успешна.</h5>	';
		mysqli_query($con,"INSERT INTO `logs` (`cont`, `stat`,`date`,`time`) VALUES ('Созданна новая учётная запись.  (".$_POST['login'].")', '1','".$date_today."','".$time_today."')");
	} ;
echo '</div>';	
} ;


if (isset($_POST['del'])) {$box_array = $_REQUEST['box']; foreach($box_array as $key => $value) {  mysqli_query($con,"DELETE FROM users WHERE id_user='$value'");    echo  "Удалена запиь: ".$value." / "; }  echo "<SCRIPT> window.location.reload();</SCRIPT>"; }

if (isset($_POST['refres'])) { echo "<SCRIPT> window.location.reload();</SCRIPT>";}


if (isset($_POST['edit'])) {



 
 
 $id_user = $_POST['id_user'];
 $passwd = $_POST['passwd'];
 $passwd2 = $_POST['passwd2'];
 $login = $_POST['login'];
 $mail_user = $_POST['mail'];
 $rule1 = $_POST['checkbox1'];
 $rule2 = $_POST['checkbox2'];
 $rule3 = $_POST['checkbox3'];
 $rule4 = $_POST['checkbox4'];
 $rule5 = $_POST['checkbox5'];

$login = $db->screening($login);

mysqli_query($con,"INSERT INTO `logs` (`cont`, `stat`,`date`,`time`) VALUES ('Изменение данных учётной записи.  (".$login.")', '1','".$date_today."','".$time_today."')");

if(isset($_POST['cbx'])){

if ($passwd != $passwd2 OR $passwd==NULL ) {echo '<div class="alert">              <button class="close" data-dismiss="alert"></button><h4>Произошли следующие ошибки:</h4><ul><li>Введенные пароли не совпадают</li></ul></div><br>';} else {
$passwd = md5($db->screening($passwd).'7seR#21rrTE6'); //~ хеш пароля с солью
 
mysqli_query($con,"UPDATE users SET passwd_user='$passwd',login_user ='$login',mail_user ='$mail_user',rule1 ='$rule1' ,rule2 ='$rule2' ,rule3 ='$rule3' ,rule4 ='$rule4',rule5 ='$rule5'  WHERE id_user = '$id_user'");
echo "<SCRIPT> window.location.reload();</SCRIPT>";
}
} else {
mysqli_query($con,"UPDATE users SET login_user ='$login',mail_user ='$mail_user',rule1 ='$rule1' ,rule2 ='$rule2' ,rule3 ='$rule3' ,rule4 ='$rule4' ,rule5 ='$rule5' WHERE id_user = '$id_user'");
echo "<SCRIPT> window.location.reload();</SCRIPT>";

}

}



?>
	 
				<br>
		
					    <button type="submit" class="btn btn-sm btn-small btn-primary" name="send" value="send" ><i class="icon-plus"></i> Добавить</button>
						<button type="submit" disabled="disabled" class="btn btn-sm btn-small btn-primary" name="edit" value="" ><i class="icon-edit"></i> Изменить</button>
						<button type="button" disabled="disabled" onclick="clin()"  class="btn btn-sm btn-small btn-white" name="clinss" value="" >Очистить</button>
						
							 </div>							
							 </div>							
							</div>
							</div>	
						</div>
					</div>
				</div>	
			
<?php	 $_PAGING = new Paging($con);	$search = $_GET['mode'];
$r = $_PAGING->get_page( 'SELECT * FROM users ORDER BY id_user DESC' ); 
 ?>

			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							<br>
							 <div class="row-fluid" >
							 <div class="row-fluid dataTables_wrapper">
<div class="btn-group"> 
	  <button onclick="return confirm('Вы действительно хотите удалить псевдонимы устройств?')" type="submit" class="btn btn-danger btn-small btn-add pull-left"  name="del"  title="del"><i class=" icon-trash"></i></button>	


				
                  </div>
				  
<div class="pull-right margin-top-20"><div class="dataTables_paginate paging_bootstrap pagination">
<ul>
<li><a href="?p=1"><i class="icon-fastleft"></i></a></li>
<li><?php echo  $_PAGING->get_prev_page_link();?></li>
<?php echo $_PAGING->get_page_links();?>
<li><?php echo $_PAGING->get_next_page_link();?></li>
</ul>
</div><div class="dataTables_info hidden-xs" id="example_info"><?php echo $_PAGING->get_result_text().' записей';?></div>
									</div>
									<div class="clearfix"></div>
								</div>

<table class="table no-more-tables">
                        <thead>
                    <tr>
				
                    <th width="30"> </th>
				    <th>  <div class="checkbox check-default"><input id="checkbox10" type="checkbox" value="1" class="checkall"><label for="checkbox10"></label></div></th>
                    <th>Пользователь</th>
					<th>E-mail</th>
					<th>Изменение <br>настроек</th>
					<th>Создание <br>правил</th>
					<th>Редактирование <br>справочников</th>
					<th>Редактирование <br>пользователей</th>
					<th>Настройка <br>панели управления</th>
									  
                    </tr>
					
                  </thead>
				  
				
                  <tbody>

<?php  while($row = $r->fetch_assoc()){  ?>

   <tr>
    
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id_user'];?>()"><i class="icon-user"></i></a></td> 
<td> <div class="checkbox check-default"><input id="chbox<?php	echo $row['id_user']; ?>" type="checkbox"  name='box[]' value=<?php	echo $row['id_user']; ?>><label for="chbox<?php	echo $row['id_user']; ?>"></label></div></td>			
<td> <a href="javascript:void(0)," onclick="getText<?php echo $row['id_user'];?>()" id="text"><span style="color: #2271D8;"><?php	echo $row['login_user']; ?><br></span></a> </td>
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id_user'];?>()" id="text"><?php	echo $row['mail_user']; ?></a></td>  


<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id_user'];?>()" id="text"><?php	if($row['rule1']==1){echo '<span class="label label-warning">1</span>';} ?></a></td>  		
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id_user'];?>()" id="text"><?php	if($row['rule2']==1){echo '<span class="label label-success">2</span>';} ?></a></td>  
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id_user'];?>()" id="text"><?php	if($row['rule3']==1){echo '<span class="label label">3</span>';} ?></a></td>  
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id_user'];?>()" id="text"><?php	if($row['rule4']==1){echo '<span class="label label-info">4</span>';} ?></a></td>  
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id_user'];?>()" id="text"><?php	if($row['rule5']==1){echo '<span class="label label-info">5</span>';} ?></a></td>  
			  
<script type="text/javascript">
function getText<?php echo $row['id_user'];?>(el){


document.getElementById('checkedit').style.display = 'block';
document.getElementById('passdiv').style.display = 'none';

document.myForm.edit.disabled = false;
	document.myForm.clinss.disabled = false;

	document.getElementById('id_user').value = '<?php	echo $row['id_user']; ?>';
	document.getElementById('login').value = '<?php	echo $row['login_user']; ?>';
	document.getElementById('mail').value = '<?php	echo $row['mail_user']; ?>';
	
		
	
	if(<?php	echo $row['rule1']; ?>==1){	document.getElementById("checkbox1").checked = true;} else  document.getElementById("checkbox1").checked = false;
	if(<?php	echo $row['rule2']; ?>==1){	document.getElementById("checkbox2").checked = true; } else  document.getElementById("checkbox2").checked = false;
	if(<?php	echo $row['rule3']; ?>==1){	document.getElementById("checkbox3").checked = true; } else  document.getElementById("checkbox3").checked = false;
	if(<?php	echo $row['rule4']; ?>==1){	document.getElementById("checkbox4").checked = true; } else  document.getElementById("checkbox4").checked = false;
	if(<?php	echo $row['rule5']; ?>==1){	document.getElementById("checkbox5").checked = true; } else  document.getElementById("checkbox5").checked = false;

}

function clin(){
	document.myForm.edit.disabled = true;
	document.myForm.clinss.disabled = true;

	document.getElementById('id_user').value = '';
	document.getElementById('login').value = '';
	document.getElementById('mail').value = '';
	
	document.getElementById("checkbox1").checked = false; 
	document.getElementById("checkbox2").checked = false; 
	document.getElementById("checkbox3").checked = false; 
	document.getElementById("checkbox4").checked = false; 
	document.getElementById("checkbox5").checked = false; 

}
	</script>
					  
 </tr>

<?php    }  ?>


                  </tbody>

                </table>
					  </form>		
							 </div>							
							</div>
							</div>	
						</div>
					</div>
				</div>	
		</div>
		
		
		

		
	
<div class="clearfix"></div>
 </div>
</div>
</div>
<?php	 include 's-rpanel.php'; ?>
</body>
</html>
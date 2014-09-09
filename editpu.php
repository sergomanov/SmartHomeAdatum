<!DOCTYPE html>
<html>
<head>
<?php	
 include 'autt.php';
 include 's-head.php';
 include 's-lib.php'; 
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
<script src="js/s-email_comman.js" type="text/javascript"></script> 
<script src="js/s-core.js" type="text/javascript"></script> 
<script src="js/s-chat.js" type="text/javascript"></script> 
<script src="js/s-demo.js" type="text/javascript"></script> 
<script src="js/select2.js"></script>
<script src="js/jquery-ui-timepicker-addon.js"></script>
<script src="js/jquery-ui-timepicker-ru.js"></script>

	<link rel="stylesheet" href="css/kindeditor.css" />
	<script charset="utf-8" src="js/kindeditor.js"></script>
	<script charset="utf-8" src="js/ru_Ru.js"></script>


 <script>
        $(document).ready(function() { $(".select2").select2(); });
$.datepicker.regional['ru'] = {
	closeText: 'Закрыть',
	prevText: '<Пред',
	nextText: 'След>',
	currentText: 'Сегодня',
	monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
	'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
	'Июл','Авг','Сен','Окт','Ноя','Дек'],
	dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	weekHeader: 'Не',
	dateFormat: 'dd.mm.yy',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['ru']);


$.timepicker.regional['ru'] = {
	timeOnlyTitle: 'Выберите время',
	timeText: 'Время',
	hourText: 'Часы',
	minuteText: 'Минуты',
	secondText: 'Секунды',
	millisecText: 'Миллисекунды',
	timezoneText: 'Часовой пояс',
	currentText: 'Сейчас',
	closeText: 'Закрыть',
	timeFormat: 'HH:mm',
	amNames: ['AM', 'A'],
	pmNames: ['PM', 'P'],
	isRTL: false
};
$.timepicker.setDefaults($.timepicker.regional['ru']);
    </script>
	


			
			
			
			
			
</head>
<!-- END HEAD -->
 <form name="myForm" method="post" >
<!-- BEGIN BODY -->
<body class="inner-menu-always-open">

<?php	 include 's-tophead.php'; ?>



<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid"> 
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar mini mini-mobile" id="main-menu" data-inner-menu="1">
 
  <?php	 include 's-slidebar.php'; ?>

   <div class="inner-menu nav-collapse">   


	<div class="inner-wrapper" >	

		<p class="menu-title"><i class="icon-programok" style="font-size: 25px;"></i>	Управление панелью задач</p>		
	 </div>
	<ul class="small-items">

					    <li><a href="<?php echo $imyaStranici?>?"><i class="icon-windows text-success"></i> Все </a><span class=" badge badge-disable " ><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler WHERE type=9 OR type=3");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
						<li><a href="<?php echo $imyaStranici?>?type=9"><i class="icon-foldertree warning"></i> Каталог </a></li>
						<li><a href="<?php echo $imyaStranici?>?type=3"><i class="icon-handdrag"></i> Кнопка </a></li>



		
	</ul>
   </div> 
   
   
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
			<input  type="hidden"  name="id" id="id" class="form-control"  placeholder="">
			
			
			<p>Тип </p>
			<select id="type" class="form-control" name="type" onChange="javascript: go(this);" style="width:100%"> 
				<option value="0"></option> 
				<option value="9">Каталог</option> 
				<option value="10">Схема</option> 
				<option value="3">Кнопка</option> 

			</select>
	  

<script type="text/javascript">
 function go(i_page) 
  { 
    var val_i_page = i_page.value;
 

  if(val_i_page==0)
 {
 
	document.getElementById('i_name').style.display="none";
	document.getElementById('i_commands').style.display="none";
	document.getElementById('i_dir').style.display="none";
	document.getElementById('i_conditions').style.display="none";
	
	document.getElementById('i_mode').style.display="none";
	document.getElementById('i_drivers').style.display="none";
	
	
	}
	
 if(val_i_page==9)
 {
 
	document.getElementById('i_name').style.display="block";
	document.getElementById('i_commands').style.display="none";
	document.getElementById('i_dir').style.display="none";
	document.getElementById('i_conditions').style.display="block";
	document.getElementById('i_mode').style.display="block";
	document.getElementById('i_drivers').style.display="block";
	}
	
	 if(val_i_page==10)
 {
 
	document.getElementById('i_name').style.display="block";
	document.getElementById('i_commands').style.display="none";
	document.getElementById('i_dir').style.display="none";
	document.getElementById('i_conditions').style.display="none";
	document.getElementById('i_mode').style.display="block";
	document.getElementById('i_drivers').style.display="block";
	}
		
if(val_i_page==3)
 {
 
	document.getElementById('i_name').style.display="block";
	document.getElementById('i_commands').style.display="block";
	document.getElementById('i_dir').style.display="block";
	document.getElementById('i_conditions').style.display="block";
	document.getElementById('i_mode').style.display="block";
	document.getElementById('i_drivers').style.display="block";
	
	}	
	
	
  

  } 
</script> 






		  <div id="i_name" style="display: none"> 
			<p>Наименование </p>
            <input id="name" name="name" type="text" class="form-control" placeholder="Наименование">
             </div> 	
			 
		<div id="i_dir" style="display: none">
		 <p>Каталог</p>

  <select multiple class="select2" id="dir" name="dir[]" style="width:100%">
			 <?php     
					$resulte = mysqli_query($con,"SELECT * FROM scheduler WHERE type=9 OR type=10 ");	
				   while($rowe = mysqli_fetch_assoc($resulte)) {
				   $moderow=$rowe['mode'];
					?> 
					
					<option value="<?php echo $rowe['id']; ?>"><?php	echo $rowe['name']; ?></option> 
						
					<?php 
					}
					?>                
			</select>
			
		</div> 

	
		
	
		<script>
			
			KindEditor.ready(function(K) {
var editor = K.editor({					allowFileManager : true				});


				K('#imgscr').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							imageUrl : K('#img').val(),
							clickFn : function(url) {
								K('#img').val(url);
								editor.hideDialog();
							}
						});
					});
				});

				
			});
		</script>


		
<br>

		<input type="hidden" id="img" name="img" value="/css/load.png" style="width:100%" /> 
		
		<div style=" text-align: center;  ">
		<img src="" alt="Фоновое изображение" id="imgscr"  style="max-height:200px; max-width:200px;">
		</div>
		

 <script> setInterval(function(){
 

 document.getElementById('imgscr').src = document.getElementById('img').value;
 
 }, 1000); </script>


 
 
 <div id="i_conditions" style="display: none">	
  		    <p>Устройство контроля состояния</p>
			 <select id="conditions"  name="conditions" class="select2" style="width:100%">
			 <option value=""></option> 
						<?php     
							$resultel = mysqli_query($con,"SELECT * FROM commands WHERE mode='KEY' ");	
						   while($rowl = mysqli_fetch_assoc($resultel)) {
							?> 
							
						<option value="<?php	echo $rowl['id']; ?>"><?php	echo $rowl['name']; ?>-<?php echo $rowl['mode']; ?>,<?php echo $rowl['address']; ?>,<?php echo $rowl['vale1']; ?>,<?php echo $rowl['vale2']; ?>,<?php echo $rowl['vale3']; ?></option> 	
							<?php 
							}
							?> 
		              
			</select>
			</div>	
			
			
			 <div id="i_drivers" style="display: none">	
  		    <p>Устройства мониторинга</p>
			 <select multiple id="drivers" class="select2" name="drivers[]" style="width:100%">
			<option value=""></option> 	
						<?php     
							$resultel = mysqli_query($con,"SELECT * FROM namedev");	
						   while($rowl = mysqli_fetch_assoc($resultel)) {
							?> 
						<option value="<?php	echo $rowl['id']; ?>"><?php	echo $rowl['name']; ?> - <?php echo $rowl['address']; ?></option> 	
							<?php 
							}
							?> 
		              
			</select>
			</div>	
			
			 <div id="i_mode" style="display: none">	
  		    <p>Контролируеммые параметры</p>
			 <select multiple id="mode" class="select2" name="mode[]" style="width:100%">
			<option value=""></option> 	
						<?php     
							$resultel = mysqli_query($con,"SELECT * FROM type WHERE type='1' ");	
						   while($rowl = mysqli_fetch_assoc($resultel)) {
							?> 
						
						<option value="<?php echo $rowl['id']; ?>"><?php echo $rowl['mode']; ?> - <?php	echo $rowl['name']; ?></option> 	
							<?php 
							}
							?> 
		              
			</select>
			</div>	

 
 
		
<div id="i_commands" style="display: none">	
 <p>Комманды </p>
				 
<select multiple class="select2" id="commands" name="commands[]" style="width:100%">
<?php    
$rtype = mysqli_query($con,"SELECT * FROM type WHERE type in ('2','3','4') "); while($rowr = mysqli_fetch_assoc($rtype)) { $rowr = $rowr['mode'];
$resulte = mysqli_query($con,"SELECT mode FROM commands WHERE mode ='$rowr' GROUP BY mode "); while($rowe = mysqli_fetch_assoc($resulte)) { $moderow=$rowe['mode'];
?> 
<optgroup label="<?php $resultetype = mysqli_query($con,"SELECT name FROM type WHERE mode ='$moderow' GROUP BY type "); while($rowetype = mysqli_fetch_assoc($resultetype)) { echo $moderow." - ".$rowetype['name'];}?>">
	<?php $resultel = mysqli_query($con,"SELECT * FROM commands WHERE mode='$moderow' "); while($rowl = mysqli_fetch_assoc($resultel)) { ?> 
			
			<option value="<?php	echo $rowl['id']; ?>"><?php	echo $rowl['name']; ?>-<?php echo $rowl['mode']; ?>,<?php echo $rowl['address']; ?>,<?php echo $rowl['vale1']; ?>,<?php echo $rowl['vale2']; ?>,<?php echo $rowl['vale3']; ?></option> 	

	<?php } ?> 
</optgroup>
<?php }} ?> 					
</select>

</div>	
				
			
				   
			<br>
				<br>
			
					    <button type="submit" class="btn btn-sm btn-small btn-primary" name="save" value="" ><i class="icon-plus"></i> Добавить</button>
						<button type="submit" disabled="disabled" class="btn btn-sm btn-small btn-primary" name="edit" value="" ><i class="icon-edit"></i> Изменить</button>
						<button type="button" disabled="disabled" onclick="clin()"  class="btn btn-sm btn-small btn-white" name="clinss" value="" >Очистить</button>
						
						
						

							 </div>							
							 </div>							
							</div>
							</div>	
						</div>
					</div>
				</div>	
			
<?php		  

$_PAGING = new Paging($con);
$type = $_GET['type'];
$search = $_GET['search'];
 
if($_GET['type']){
  $r = $_PAGING->get_page( "SELECT * FROM scheduler WHERE type = '$type' ORDER BY id DESC" ); 
}
else
{ 
$r = $_PAGING->get_page( "SELECT * FROM scheduler WHERE type = '3' OR type = '9' OR type = '10' ORDER BY id DESC" ); 
}
  ?>

			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							<br>
							 <div class="row-fluid" >
							 <div class="row-fluid dataTables_wrapper">

								<div class="pull-right margin-top-20">
									<div class="dataTables_paginate paging_bootstrap pagination">
									<ul>
									<li><a href="?p=1"><i class="icon-fastleft"></i></a></li>
									  <li><?php echo  $_PAGING->get_prev_page_link();?></li>
  							    	  <?php echo $_PAGING->get_page_links();?>
									  <li><?php echo $_PAGING->get_next_page_link();?></li>
									</ul>
									</div>
									<div class="dataTables_info hidden-xs" id="example_info"><?php echo $_PAGING->get_result_text().' записей';?></div>
									</div>
									   <button onclick="return confirm('Вы действительно хотите удалить запись?')" type="submit" class="btn btn-danger btn-small"  name="del"  title="Удалить правила"><i class=" icon-trash"></i> </button>	
									<div class="clearfix"></div>
								</div>
								
								<div id="email-list">									
								

								
								
									  

       <table class="table no-more-tables">
                  <thead>
                    <tr>
			
					<th width="20"></th>
					 <th width="20"></th>
                      <th width="40">  <div class="checkbox check-default">
														<input id="checkbox10" type="checkbox" value="1" class="checkall">
														<label for="checkbox10"></label>
													</div></th>
					 
					  <th>Наименование</th>
					 <th>Тип</th>
					  <th >Комманды</th>
					   <th >Каталог</th>
					    <th >Проверка</th>
						
						<th >Устройства</th>
						<th >Датчики</th>
						
						
						

					  
                    </tr>
					
				
				
					






                  </thead>
				  
				
                  <tbody>

<?php
while($row = $r->fetch_assoc())
{

  ?>

  <tr>
  
  
  
  
  
 
  
   <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); " id="text"><img src="<?php echo $row['img'];?>" alt=""  style=" max-width:40px;   "></a></td>
  
  <td>
		<a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); ">
					   <?php if($row['type']==3){ echo '<i class="icon-handdrag"></i>';}  ?>
					   <?php if($row['type']==9){ echo '<i class="icon-foldertree warning"></i>';}  ?>
	</a>  
</td>

                      <td> <div class="checkbox check-default">
									<input id="checkbox<?php	echo $row['id']; ?>" type="checkbox"  name='box[]' value=<?php	echo $row['id']; ?>>
									<label for="checkbox<?php	echo $row['id']; ?>"></label>
							</div>
					  </td>
					  
					    
	

						
					  
					  <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); " id="text"><span style="color: #2271D8;"><?php	echo $row['name']; ?><br></span></a></td>
					 
<td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); "><?php if($row['type']==3){ echo "Кнопка";}  ?><?php if($row['type']==9){ echo "Каталог";}  ?><?php if($row['type']==10){ echo "Схема";}  ?></a></td>				 
		
		<td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); "><?php	echo $row['commands']; ?></a></td>
					    <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); "><?php	echo $row['dir']; ?></a></td>
						 <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); "><?php	echo $row['conditions']; ?></a></td>
						 						 <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); "><?php	echo $row['drivers']; ?></a></td>
												 						 <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); "><?php	echo $row['mode']; ?></a></td>
						 
						 
						 
						 						 
 

					  
	<script type="text/javascript">
		function getText<?php echo $row['id'];?>(){

	
	
	
			$('#type').val('<?php	echo $row['type']; ?>').change();
			$('#conditions').val('<?php	echo $row['conditions']; ?>').change();
			document.getElementById('id').value = '<?php	echo $row['id']; ?>';
			document.getElementById('img').value = '<?php	echo $row['img']; ?>';
			document.getElementById('name').value = '<?php	echo $row['name']; ?>';
			document.getElementById('imgscr').src = '<?php	echo $row['img']; ?>';
			
			
		$("#mode").val([<?php	echo $row['mode']; ?>]).select2();
		$("#drivers").val([<?php	echo $row['drivers']; ?>]).select2();
			$("#dir").val([<?php	echo $row['dir']; ?>]).select2();
  		    $("#commands").val([<?php	echo $row['commands']; ?>]).select2();
			document.myForm.edit.disabled = false;
			document.myForm.clinss.disabled = false;
	
		}
	</script>
	
		<script type="text/javascript">
		function clin(){
		document.getElementById('imgscr').src = '/css/load.png';
		document.getElementById('img').value = '/css/load.png';
		$('#conditions').val('').change();
			$('#type').val('').change();
			document.getElementById('id').value = '';
			document.getElementById('name').value = '';

			
  		    $("#commands").val(['']).select2();
			document.myForm.edit.disabled = true;
			document.myForm.clinss.disabled = true;
		}
	</script>
	

                    </tr>

<?php }  ?>

				  
				  
   
                  </tbody>
				  
				   
				  </form>

				  
                </table>	
								
								
								
								
								
								
								
								
								
							 </div>							
							 </div>							
							</div>
							</div>	
						</div>
					</div>
				</div>	
		</div>
		
		
		
		<?php

if (isset($_POST['del'])) {
$box_array = $_REQUEST['box'];

 foreach($box_array as $key => $value)
 {
  mysqli_query($con,"DELETE FROM scheduler WHERE id='$value'");
    echo  "Удалена запиь: ".$value." / ";
	
 } 
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
 }

 
 if (isset($_POST['deactpr'])) {
$box_array = $_REQUEST['box'];

 foreach($box_array as $key => $value)
 {
mysqli_query($con,"UPDATE scheduler SET switch='0'  WHERE id = '$value'");
    echo  "Отключено правило: ".$value;
	
 } 
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
 }
 
 
  if (isset($_POST['actpr'])) {
$box_array = $_REQUEST['box'];

 foreach($box_array as $key => $value)
 {
mysqli_query($con,"UPDATE scheduler SET switch='1'  WHERE id = '$value'");
    echo  "Включено правило: ".$value;
	
 } 
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
 }
 
 

 
					

if (isset($_POST['save'])) {

 $name = $_POST['name'];
 $type = $_POST['type'];
 $img = $_POST['img'];
$conditions = $_POST['conditions'];
 
 

  foreach ($_POST['dir'] as $dirb)   {  $dira=$dirb.",";  $dirc .= $dira;  } $dir = substr($dirc, 0, strlen($dirc)-1); 
  foreach ($_POST['commands'] as $commandsb)   {  $commandsa=$commandsb.",";  $commandsc .= $commandsa;  } $commands = substr($commandsc, 0, strlen($commandsc)-1); 
  foreach ($_POST['mode'] as $modeb)   {  $modea=$modeb.",";  $modec .= $modea;  } $mode = substr($modec, 0, strlen($modec)-1); 
  foreach ($_POST['drivers'] as $driversb)   {  $driversa=$driversb.",";  $driversc .= $driversa;  } $drivers = substr($driversc, 0, strlen($driversc)-1); 

  
 if($type == '9')
 {
 $dir='';
 $commands='';
 //$mode='';
 //$drivers='';
 };
 
 
mysqli_query($con,"INSERT INTO scheduler (name, switch, type, date, time, weekdays, monthdays,month,timer,datein,dateout,timein,timeout,conditions,commands,dir,img,drivers,mode)
 VALUES ('$name','0', '$type', '$date', '$time', '$weekdays', '$monthdays','$month','$timer','$datein','$dateout','$timein','$timeout','$conditions','$commands','$dir','$img','$drivers','$mode')");

 echo "Запись добавлена";
  echo "<SCRIPT> window.location.reload();</SCRIPT>";
}



if (isset($_POST['refres'])) {

 echo "<SCRIPT> window.location.reload();</SCRIPT>";
}

if (isset($_POST['edit'])) {
 $id = $_POST['id'];
 $name = $_POST['name'];
 $type = $_POST['type'];
  $img = $_POST['img'];
  $conditions = $_POST['conditions'];

  foreach ($_POST['dir'] as $dirb)   {  $dira=$dirb.",";  $dirc .= $dira;  } $dir = substr($dirc, 0, strlen($dirc)-1); 
  foreach ($_POST['commands'] as $commandsb)   {  $commandsa=$commandsb.",";  $commandsc .= $commandsa;  } $commands = substr($commandsc, 0, strlen($commandsc)-1); 
  foreach ($_POST['mode'] as $modeb)   {  $modea=$modeb.",";  $modec .= $modea;  } $mode = substr($modec, 0, strlen($modec)-1); 
  foreach ($_POST['drivers'] as $driversb)   {  $driversa=$driversb.",";  $driversc .= $driversa;  } $drivers = substr($driversc, 0, strlen($driversc)-1); 

 if($type == '9')
 {
 $dir='';
 $commands='';
 //$mode='';
 //$drivers='';
 };


  

 

 mysqli_query($con,"UPDATE scheduler SET  name='$name', switch='$switch', mode='$mode',drivers='$drivers',type='$type', date='$date', time='$time', weekdays='$weekdays', monthdays='$monthdays',month='$month',timer='$timer',datein='$datein',dateout='$dateout',timein='$timein',timeout='$timeout',conditions='$conditions',commands='$commands',dir='$dir',img='$img' WHERE id = '$id'");

 echo "Запись изменена";
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
}

?>
		
		

	

 <div class="clearfix"></div>
  </div>
   <div class="clearfix"></div>

  <!-- END PAGE --> 
</div>

 </div>
 
<?php	
 include 's-rpanel.php'; 
?>


<script type="text/javascript">
	$('#type').val('<?php echo $_GET['type']; ?>').change();
</script>


</body>
</html>
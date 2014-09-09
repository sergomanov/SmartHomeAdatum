<!DOCTYPE html>
<html>
<head>


<?php
 include 's-head.php';
 include 's-lib.php'; 
 include 'autt.php';	
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
	dateFormat: 'yy-mm-dd',
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

<?php	 include 'adatum.class.php'; ?>

<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid"> 
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar mini mini-mobile" id="main-menu" data-inner-menu="1">
 
  <?php	 include 's-slidebar.php'; ?>

   <div class="inner-menu nav-collapse">   


	<div class="inner-wrapper" >	

		<p class="menu-title"><i class="icon-alarmclock" style="font-size: 25px;"></i>	 Планировщик</p>		
	 </div>
	<ul class="small-items">

					    <li><a href="<?php echo $imyaStranici?>?"><i class="icon-windows text-success"></i> Все </a><span class=" badge badge-disable " ><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
						<li><a href="<?php echo $imyaStranici?>?type=1"><i class="icon-time"></i> По таймеру </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler WHERE type='1'");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
						<li><a href="<?php echo $imyaStranici?>?type=2"><i class="icon-circleone"></i> Один раз </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler WHERE type='2'");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
											<li><a href="<?php echo $imyaStranici?>?type=4"><i class="icon-networksignal"></i> По сигналу </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler WHERE type='4'");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
						<li><a href="<?php echo $imyaStranici?>?type=5"><i class="icon-circled"></i> Ежедневно </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler WHERE type='5'");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
						<li><a href="<?php echo $imyaStranici?>?type=6"><i class="icon-circlew"></i> Еженедельно </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler WHERE type='6'");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
						<li><a href="<?php echo $imyaStranici?>?type=7"><i class="icon-circlem"></i> Ежемесячно </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler WHERE type='7'");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
						<li><a href="<?php echo $imyaStranici?>?type=8"><i class="icon-circley"></i> Ежегодно </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM scheduler WHERE type='8'");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
	
              


		
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

			

 
  
	<button  type="submit" class="btn btn-small <?php  $result= mysqli_query($con, "SELECT * FROM data WHERE id='1'"); $row=mysqli_fetch_array($result);if($row['state']==0){echo "btn-primary";}else{echo "";}  ?> "  name="chbox" ><i class="icon-calendaralt-cronjobs"></i>
	<?php  $result= mysqli_query($con, "SELECT * FROM data WHERE id='1'"); $row=mysqli_fetch_array($result);if($row['state']==0){echo "Показать календарь";}else{echo "Скрыть календарь";}  ?> 
	
	</button>
   
	<input  type="hidden"  name="state" id="state" class="form-control" value="<?php  $result= mysqli_query($con, "SELECT * FROM data WHERE id='1'"); $row=mysqli_fetch_array($result);echo $row['state'];  ?>">
						
			
			<p>Тип </p>
			<select id="type" class="form-control" name="type" onChange="javascript: go(this);" style="width:100%"> 
				<option value="0"></option> 
				<option value="1">По таймеру</option> 
				<option value="2">Один раз</option> 
				<option value="4">По сигналу</option>
				<option value="5">Ежедневно</option> 
				<option value="6">Еженедельно</option>
				<option value="7">Ежемесячно</option> 
				<option value="8">Ежегодно</option> 
			</select>
	  

<script type="text/javascript">
 function go(i_page) 
  { 
    var val_i_page = i_page.value;
 

  if(val_i_page==0)
 {
 
	document.getElementById('i_name').style.display="none";
    document.getElementById('i_date').style.display="none";
	document.getElementById('i_time').style.display="none";
	document.getElementById('i_weekdays').style.display="none";
	document.getElementById('i_monthdays').style.display="none";
	document.getElementById('i_month').style.display="none";
	document.getElementById('i_timer').style.display="none";
	document.getElementById('i_datein').style.display="none";
	document.getElementById('i_dateout').style.display="none";
	document.getElementById('i_commands').style.display="none";
	document.getElementById('i_conditions').style.display="none";
	
	}
	
 if(val_i_page==1)
 {
 
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_date').style.display="none";
	document.getElementById('i_time').style.display="none";
	document.getElementById('i_weekdays').style.display="none";
	document.getElementById('i_monthdays').style.display="none";
	document.getElementById('i_month').style.display="none";
	document.getElementById('i_timer').style.display="block";
	document.getElementById('i_datein').style.display="block";
	document.getElementById('i_dateout').style.display="block";
	document.getElementById('i_commands').style.display="block";
	document.getElementById('i_conditions').style.display="none";
	
	}
	
	 if(val_i_page==2)
 {
 
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_date').style.display="block";
	document.getElementById('i_time').style.display="block";
	document.getElementById('i_weekdays').style.display="none";
	document.getElementById('i_monthdays').style.display="none";
	document.getElementById('i_month').style.display="none";
	document.getElementById('i_timer').style.display="none";
	document.getElementById('i_datein').style.display="none";
	document.getElementById('i_dateout').style.display="none";
	document.getElementById('i_commands').style.display="block";
	document.getElementById('i_conditions').style.display="none";
	
	}
		

				if(val_i_page==4)
 {
 
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_date').style.display="none";
	document.getElementById('i_time').style.display="none";
	document.getElementById('i_weekdays').style.display="none";
	document.getElementById('i_monthdays').style.display="none";
	document.getElementById('i_month').style.display="none";
	document.getElementById('i_timer').style.display="none";
	document.getElementById('i_datein').style.display="block";
	document.getElementById('i_dateout').style.display="block";
	document.getElementById('i_commands').style.display="block";
	document.getElementById('i_conditions').style.display="block";
	
	}
				//<option value="5">Ежедневно</option> 
				if(val_i_page==5)
 {
 
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_date').style.display="none";
	document.getElementById('i_time').style.display="block";
	document.getElementById('i_weekdays').style.display="none";
	document.getElementById('i_monthdays').style.display="none";
	document.getElementById('i_month').style.display="none";
	document.getElementById('i_timer').style.display="none";
	document.getElementById('i_datein').style.display="none";
	document.getElementById('i_dateout').style.display="none";
	document.getElementById('i_commands').style.display="block";
	document.getElementById('i_conditions').style.display="none";
	
	}
				//<option value="6">Еженедельно</option>
				if(val_i_page==6)
 {
 
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_date').style.display="none";
	document.getElementById('i_time').style.display="block";
	document.getElementById('i_weekdays').style.display="block";
	document.getElementById('i_monthdays').style.display="none";
	document.getElementById('i_month').style.display="none";
	document.getElementById('i_timer').style.display="none";
	document.getElementById('i_datein').style.display="none";
	document.getElementById('i_dateout').style.display="none";
	document.getElementById('i_commands').style.display="block";
	document.getElementById('i_conditions').style.display="none";
	
	}
				//<option value="7">Ежемесячно</option> 
				if(val_i_page==7)
 {
 
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_date').style.display="none";
	document.getElementById('i_time').style.display="block";
	document.getElementById('i_weekdays').style.display="none";
	document.getElementById('i_monthdays').style.display="block";
	document.getElementById('i_month').style.display="none";
	document.getElementById('i_timer').style.display="none";
	document.getElementById('i_datein').style.display="none";
	document.getElementById('i_dateout').style.display="none";
	document.getElementById('i_commands').style.display="block";
	document.getElementById('i_conditions').style.display="none";
	
	}
				//<option value="8">Ежегодно</option> 
				if(val_i_page==8)
 {
 
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_date').style.display="none";
	document.getElementById('i_time').style.display="block";
	document.getElementById('i_weekdays').style.display="none";
	document.getElementById('i_monthdays').style.display="block";
	document.getElementById('i_month').style.display="block";
	document.getElementById('i_timer').style.display="none";
	document.getElementById('i_datein').style.display="none";
	document.getElementById('i_dateout').style.display="none";
	document.getElementById('i_commands').style.display="block";
	document.getElementById('i_conditions').style.display="none";
	
	}
	
  

  } 
</script> 






		  <div id="i_name" style="display: none"> 
			<p>Наименование </p>
            <input id="name" name="name" type="text" class="form-control" placeholder="Наименование">
             </div> 	


			<div id="i_date" style="display: none"> 
  		   <p>Дата </p>
			<script type="text/javascript">				$(function(){	$('#date').datepicker({	numberOfMonths: 2});});		</script>
			<input type="text" name="date" id="date" value="" />
			</div> 	
          

			<div id="i_time" style="display: none">
			 <p>Время </p>
			<script type="text/javascript">				$(function(){	$('#time').timepicker({	timeFormat: 'HH:mm:ss',});});		</script>
			<input type="text" name="time" id="time" value="" />
				</div>
				
				
				<div id="i_weekdays" style="display: none">
                 <p>Дни недели </p>
                 <select name="weekdays[]" class="select2" id="weekdays" style="width:100%" multiple>
                    <option value="1">Пн</option>
                    <option value="2">Вт</option>
                    <option value="3">Ср</option>
					 <option value="4">Чт</option>
                    <option value="5">Пт</option>
                    <option value="6">Сб</option>
					 <option value="0">Вс</option>
             
                </select>
				</div>

				
				
				
				<div id="i_monthdays" style="display: none">
                  <p>Числа месяца </p>
                  <select name="monthdays[]" id="monthdays" class="select2" style="width:100%" multiple>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
				    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
				    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
				    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
				    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
                    <option value="30">30</option>
					<option value="31">31</option>
            </select>
			</div>
      


			
			<div id="i_month" style="display: none">	
            <p>Месяца</p>
            <select name="month[]" id="month" class="select2" style="width:100%" multiple>
                    <option value="1">Январь</option>
                    <option value="2">Февраль</option>
                    <option value="3">Март</option>
				    <option value="4">Апрель</option>
                    <option value="5">Май</option>
                    <option value="6">Июнь</option>
					<option value="7">Июнь</option>
					<option value="8">Август</option>
                    <option value="9">Сентябрь</option>
                    <option value="10">Октябрь</option>
				    <option value="11">Ноябрь</option>
                    <option value="12">Декабрь</option>
            </select>
           </div>
			
				<div id="i_timer" style="display: none">	
             <p>Таймер(в минутах) </p>
			<script type="text/javascript">				$(function(){	$('#timer').timepicker({	timeFormat: 'mm',});});		</script>
			<input type="text" name="timer" id="timer" value="" />
			 </div>

				
	






				<div id="i_datein" style="display: none">	
			     <p>Начало(в минутах) </p>
		    <script type="text/javascript">			$(function(){	$('#datein').datetimepicker({	altField: "#timein",timeFormat: 'HH:mm:ss',numberOfMonths: 2});});		</script>
			<div class="col-md-6" style="padding-left: 0px;"><input type="text" name="datein" id="datein" value="" style="width: 100%;" /></div>
			<div class="col-md-6" style="padding-left: 0px;"><input type="text" name="timein" id="timein" value="" style="width: 100%;" /></div>
			  </div>

			  
				<div id="i_dateout" style="display: none">	
			  <p>Окончание(в минутах) </p>
			<script type="text/javascript">			$(function(){	$('#dateout').datetimepicker({	altField: "#timeout",timeFormat: 'HH:mm:ss',numberOfMonths: 2,});});		</script>
			<div class="col-md-6" style="padding-left: 0px;"><input type="text" name="dateout" id="dateout" value="" style="width: 100%;" /></div>
			<div class="col-md-6" style="padding-left: 0px;"><input type="text" name="timeout" id="timeout" value="" style="width: 100%;"/></div>
			</div>
				
				  



				
			
			

				<div id="i_conditions" style="display: none">	
  		    <p>Условия</p>
<select multiple class="select2" id="conditions" name="conditions[]" style="width:100%">
<?php    
$rtype = mysqli_query($con,"SELECT * FROM type WHERE type in ('1','2','3','4') "); while($rowr = mysqli_fetch_assoc($rtype)) { $rowr = $rowr['mode'];
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
			
					    <button type="submit" class="btn btn-default btn-cons btn-success btn-xs btn-mini" name="save" value="" ><i class="icon-plus"></i> Добавить</button>
						<button type="submit" disabled="disabled" class="btn btn-default btn-cons btn-info  btn-xs btn-mini" name="edit" value="" ><i class="icon-edit"></i> Изменить</button>
						<button type="button" disabled="disabled" onclick="clin()"  class="btn btn-default btn-white btn-cons  btn-xs btn-mini" name="clinss" value="" >Очистить</button>
						
			<button disabled="disabled" onclick="return confirm('Вы действительно хотите удалить запись?')" type="submit" class="btn btn-default btn-danger btn-cons  btn-xs btn-mini"  name="onedel"  title="del"><i class=" icon-trash"></i> Удалить правила</button>	
			<button disabled="disabled" type="submit" class="btn btn-default btn-cons btn-primary  btn-xs btn-mini"  name="oneactpr"  title="actpr"><i class=" icon-link"></i> Активировать правила</button>	
			<button disabled="disabled" type="submit" class="btn btn-default btn-cons  btn-xs btn-mini"  name="onedeactpr"  title="deactpr"><i class="icon-linkalt"></i> Деактивировать правила</button>		
						

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
 
 if (isset($_GET['type'])) {


  $r = $_PAGING->get_page( "SELECT * FROM scheduler WHERE type = '$type' ORDER BY id DESC" ); 
  }
  else{
  
  
$r = $_PAGING->get_page( 'SELECT * FROM scheduler WHERE (name LIKE "%'.$search.'%" or id LIKE "%'.$search.'%") AND type IN ("1","2","4","5","6","7","8")  ORDER BY id DESC' ); 
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

							 



<div id="cal" style="<?php  $result= mysqli_query($con, "SELECT * FROM data WHERE id='1'"); $row=mysqli_fetch_array($result); if($row['state']==0){echo "display: none"; }  ?>">







<table width="100%">
  <tr>
    <th width="20%"><i class="icon-arrow-left"></i></th>
    <th width="60%"><div style="vertical-align:middle; text-align:center;"><?php echo monnames(date("n"));  ?></div></th>
	<th width="20%"><i class="icon-arrow-right pull-right"></i></th>
  </tr>

</table>
<?php



		
$month=date("n");

$year=date("Y");

  $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';
  /* Заглавия в таблице */
  $headings = array('Понедельник','Вторник','Среда','Четверг','Пятница','Субота','Воскресенье');
  $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
  
 
  
  /* необходимые переменные дней и недель... */
  $running_day = date('w',mktime(0,0,0,$month,1,$year));
  $running_day = $running_day - 1;
  $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
  $days_in_this_week = 1;
  $day_counter = 0;
  $dates_array = array();
  /* первая строка календаря */
  $calendar.= '<tr class="calendar-row">';
  /* вывод пустых ячеек в сетке календаря */
  for($x = 0; $x < $running_day; $x++):
    $calendar.= '<td class="calendar-day-np"> </td>';
    $days_in_this_week++;

  endfor;
  /* дошли до чисел, будем их писать в первую строку */
  for($list_day = 1; $list_day <= $days_in_month; $list_day++):
    $calendar.= '<td class="calendar-day">';
	 $isodate = sprintf("%04d-%02d-%02d", $year, $month, $list_day);
      /* Пишем номер в ячейку */
	 if ($list_day == date("d") AND $month == date("m") AND $year  == date("Y") ){
      $calendar.= '<div class="day-numberd">'.$list_day.'</div>';
	  } else {
	   $calendar.= '<div class="day-number">'.$list_day.'</div>';
	  }
      /** ЗДЕСЬ МОЖНО СДЕЛАТЬ MySQL ЗАПРОС К БАЗЕ ДАННЫХ! ЕСЛИ НАЙДЕНО СОВПАДЕНИЕ ДАТЫ СОБЫТИЯ С ТЕКУЩЕЙ - ВЫВОДИМ! **/
      $calendar.= str_repeat('<p> </p>',2);
	  $list_wek=date("w",strtotime($isodate));
	  $list_mon=date("n",strtotime($isodate));
	  
$res999 = mysqli_query($con,"SELECT * FROM `scheduler` WHERE date ='$isodate' OR (datein<='$isodate' AND dateout>='$isodate') OR type='5' OR (type='7' AND FIND_IN_SET('$list_day', monthdays)) OR (type='6' AND FIND_IN_SET('$list_wek', weekdays)) OR (type='8' AND FIND_IN_SET('$list_mon', month) AND FIND_IN_SET('$list_day', monthdays)) ORDER BY date ASC, datein ASC");
if($res999){while($row999 = mysqli_fetch_assoc($res999)){
	
if($row999['type']==1){$colortb="label-info ";}
if($row999['type']==2){$colortb="label-warning";}
if($row999['type']==4){$colortb="label-important";}
if($row999['type']==5){$colortb="label-success";}
if($row999['type']==6){$colortb="label-inverse";}
if($row999['type']==7){$colortb="";}
if($row999['type']==8){$colortb="label-no";}



if($row999['switch']==0){$disdtb="aopacity";}else{$disdtb="";}


							 
   $calendar.= '<a href="javascript:void(0)," class="popbutton" onclick="getText'.$row999['id'].'(); " ><p><span class="label '.$colortb.' '.$disdtb.'">'.$row999['time'].$row999['timein']." ".$row999['name'].'</span> </p></a>';
							 }}



 $calendar.= '</td>';
    if($running_day == 6):
      $calendar.= '</tr>';
      if(($day_counter+1) != $days_in_month):
        $calendar.= '<tr class="calendar-row">';
      endif;
      $running_day = -1;
      $days_in_this_week = 0;
    endif;
    $days_in_this_week++; $running_day++; $day_counter++;
  endfor;
  /* Выводим пустые ячейки в конце последней недели */
  if($days_in_this_week < 8):
    for($x = 1; $x <= (8 - $days_in_this_week); $x++):
      $calendar.= '<td class="calendar-day-np"> </td>';
    endfor;
  endif;
  /* Закрываем последнюю строку */
  $calendar.= '</tr>';
  /* Закрываем таблицу */
  $calendar.= '</table>';
  
  /* Все сделано, возвращаем результат */
  echo $calendar;

  ?>					 
							 
							 
							 
							 <br>
		</div>					 
							 
							 
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
			<button  type="submit" class="btn btn-small btn btn-primary "  name="actpr"  title="Активировать правила"><i class=" icon-link"></i> </button>	
			<button  type="submit" class="btn btn-small"  name="deactpr"  title="Деактивировать правила"><i class="icon-linkalt"></i> </button>
			
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
					  <th width="30"></th>
					  <th>Наименование<br>Тип</th>
					
                      <th width="10%">Дата<br>Время</th>
					 
					  <th>Дни недели<br>Числа месяца</th>
					
					  <th>Месяц<br>Таймер(в мин)</th>
				
					  <th>Начало<br>Окончание</th>
					 
					
					  <th >Условия<br>Комманды</th>
					  
                    </tr>
					
				
				
					






                  </thead>
				  
				
                  <tbody>

<?php
while($row = $r->fetch_assoc())
{

  ?>

  <tr>
  
   <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); " id="text"><i class="icon-edit"></i></a></td>
  
  <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); " id="text">
					   
					   <?php if($row['type']==1){ echo '<i class="icon-time"></i>';}  ?>
					   <?php if($row['type']==2){ echo '<i class="icon-circleone"></i>';}  ?>
					   <?php if($row['type']==3){ echo '<i class="icon-handdrag"></i>';}  ?>
					   <?php if($row['type']==4){ echo '<i class="icon-networksignal"></i>';}  ?>
					   <?php if($row['type']==5){ echo '<i class="icon-circled"></i>';}  ?>
					   <?php if($row['type']==6){ echo '<i class="icon-circlew"></i>';}  ?>
					   <?php if($row['type']==7){ echo '<i class="icon-circlem"></i>';}  ?>
					   <?php if($row['type']==8){ echo '<i class="icon-circley"></i>';}  ?>
					   

					</a>  </td>
					  
					  
					  
					  
                      <td> <div class="checkbox check-default">
									<input id="checkbox<?php	echo $row['id']; ?>" type="checkbox"  name='box[]' value=<?php	echo $row['id']; ?>>
									<label for="checkbox<?php	echo $row['id']; ?>"></label>
							</div>
					  </td>
					  
					    
					  <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); " id="text"><?php   if( $row['switch'] == 1){echo "<i class=' icon-ok text-success'></i>";}  ?><?php   if( $row['switch'] == 0){echo "<i class='icon-remove text-danger'></i>";} ?>	</a></td>
					  

						
					  
					  <td><a href="javascript:void(0)," class="popbutton" onclick="getText<?php echo $row['id'];?>(); " id="text">
					 <span style="color: #2271D8;"><?php	echo $row['name']; ?><br></span> 
					  				  
					   <?php if($row['type']==1){ echo "По таймеру";}  ?>
					   <?php if($row['type']==2){ echo "Один раз";}  ?>
					   <?php if($row['type']==3){ echo "Ручной запуск";}  ?>
					   <?php if($row['type']==4){ echo "По сигналу";}  ?>
					   <?php if($row['type']==5){ echo "Ежедневно";}  ?>
					   <?php if($row['type']==6){ echo "Еженедельно";}  ?>
					   <?php if($row['type']==7){ echo "Ежемесячно";}  ?>
					   <?php if($row['type']==8){ echo "Ежегодно";}  ?>
					  
					  
					  </a>
					  </td>
					 
                      <td>			 <span style="color: #2271D8;"><?php	echo $row['date']; ?></span> <br><?php	echo $row['time']; ?></td>
					
					  <td><?php	 $array1=array(0,1,2,3,4,5,6);  $array2=array("Вс","Пн","Вт","Ср","Чт","Пт","Сб");  echo str_replace($array1,$array2,$row['weekdays']);	  ?><br><?php	echo $row['monthdays']; ?></td>
					
					  <td><?php	 $array1=array(1,2,3,4,5,6,7,8,9,10,11,12);  $array2=array("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Декабрь");  echo str_replace($array1,$array2,$row['month']);	  ?><br><?php	echo $row['timer']; ?></td>


					<td> <span style="color: #2271D8;"><?php	echo $row['datein']; ?></span><span style="color: #25DB4A; font-weight:bold;"> / </span><?php	echo $row['timein']; ?><br><span style="color: #2271D8;"><?php	echo $row['dateout']; ?></span><span style="color: #25DB4A; font-weight:bold;"> / </span><?php	echo $row['timeout']; ?></td>

					 
					  <td><?php	echo $row['conditions']; ?><br><?php	echo $row['commands']; ?></td>
  			
					  
	<script type="text/javascript">
		function getText<?php echo $row['id'];?>(){
			document.myForm.edit.disabled = false;
			document.myForm.clinss.disabled = false;
			
			
			document.myForm.oneactpr.disabled = false;
			document.myForm.onedeactpr.disabled = false;
				document.myForm.onedel.disabled = false;
			
			$('#type').val('<?php	echo $row['type']; ?>').change();
			document.getElementById('id').value = '<?php	echo $row['id']; ?>';
			document.getElementById('name').value = '<?php	echo $row['name']; ?>';
			document.getElementById('date').value = '<?php	echo $row['date']; ?>';
			document.getElementById('time').value = '<?php	echo $row['time']; ?>';
			document.getElementById('timein').value = '<?php	echo $row['timein']; ?>';
			document.getElementById('timeout').value = '<?php	echo $row['timeout']; ?>';
			document.getElementById('timer').value = '<?php	echo $row['timer']; ?>';
			document.getElementById('datein').value = '<?php	echo $row['datein']; ?>';
			document.getElementById('dateout').value = '<?php	echo $row['dateout']; ?>';
			$("#weekdays").val([<?php	echo $row['weekdays']; ?>]).select2();
			$("#monthdays").val([<?php	echo $row['monthdays']; ?>]).select2();
			$("#month").val([<?php	echo $row['month']; ?>]).select2();
			$("#conditions").val([<?php	echo $row['conditions']; ?>]).select2();
  		    $("#commands").val([<?php	echo $row['commands']; ?>]).select2();
			
	
		}
	</script>
	
		<script type="text/javascript">
		function clin(){
			document.myForm.edit.disabled = true;
			document.myForm.clinss.disabled = true;
				document.myForm.oneactpr.disabled = true;
			document.myForm.onedeactpr.disabled = true;
				document.myForm.onedel.disabled = true;
			$('#type').val('').change();
			document.getElementById('id').value = '';
			document.getElementById('name').value = '';
			document.getElementById('date').value = '';
			document.getElementById('time').value = '';
			document.getElementById('timein').value = '';
			document.getElementById('timeout').value = '';
			document.getElementById('timer').value = '';
			document.getElementById('datein').value = '';
			document.getElementById('dateout').value = '';
			$("#weekdays").val(['']).select2();
			$("#monthdays").val(['']).select2();
			$("#month").val(['']).select2();
			$("#conditions").val(['']).select2();
  		    $("#commands").val(['']).select2();
		
		}
	</script>
	

                    </tr>

<?php	}  ?>

  
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
		</div>
		
		
		
		<?php
		
	


		
	if (isset($_POST['chbox'])) 
	{ 
	$viscal = $_POST['state']; 
	if($viscal==0 ){$viscal=1;}else{$viscal=0;}
	mysqli_query($con,"UPDATE data SET state='$viscal'  WHERE id = 1"); 
	echo "<SCRIPT> window.location.reload();</SCRIPT>";
	}	
		

if (isset($_POST['del'])) {$box_array = $_REQUEST['box']; foreach($box_array as $key => $value) {  mysqli_query($con,"DELETE FROM scheduler WHERE id='$value'");    echo  "Удалена запиь: ".$value." / ";}  echo "<SCRIPT> window.location.reload();</SCRIPT>"; }
if (isset($_POST['deactpr'])) {$box_array = $_REQUEST['box']; foreach($box_array as $key => $value){mysqli_query($con,"UPDATE scheduler SET switch='0'  WHERE id = '$value'"); }  echo "<SCRIPT> window.location.reload();</SCRIPT>"; }
if (isset($_POST['actpr'])) {$box_array = $_REQUEST['box']; foreach($box_array as $key => $value) {mysqli_query($con,"UPDATE scheduler SET switch='1'  WHERE id = '$value'"); }  echo "<SCRIPT> window.location.reload();</SCRIPT>"; }

if (isset($_POST['onedel'])) { $id = $_POST['id'];  mysqli_query($con,"DELETE FROM scheduler WHERE id='$id'");  echo "<SCRIPT> window.location.reload();</SCRIPT>"; }
if (isset($_POST['onedeactpr'])) {$id = $_POST['id']; mysqli_query($con,"UPDATE scheduler SET switch='0'  WHERE id = '$id'");  echo "<SCRIPT> window.location.reload();</SCRIPT>"; }
if (isset($_POST['oneactpr'])) {$id = $_POST['id'];  mysqli_query($con,"UPDATE scheduler SET switch='1'  WHERE id = '$id'");   echo "<SCRIPT> window.location.reload();</SCRIPT>"; }



if (isset($_POST['save'])) {

 $name = $_POST['name'];
 $type = $_POST['type'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $timer = $_POST['timer'];
 $datein = $_POST['datein'];
 $dateout = $_POST['dateout'];
 $timein = $_POST['timein'];
 $timeout = $_POST['timeout'];

 
  foreach ($_POST['weekdays'] as $weekdaysb)   {  $weekdaysa=$weekdaysb.",";  $weekdaysc .= $weekdaysa;  } $weekdays = substr($weekdaysc, 0, strlen($weekdaysc)-1); 
  foreach ($_POST['monthdays'] as $monthdaysb)   {  $monthdaysa=$monthdaysb.",";  $monthdaysc .= $monthdaysa;  } $monthdays = substr($monthdaysc, 0, strlen($monthdaysc)-1); 
  foreach ($_POST['month'] as $monthb)   {  $montha=$monthb.",";  $monthc .= $montha;  } $month = substr($monthc, 0, strlen($monthc)-1); 
  foreach ($_POST['conditions'] as $conditionsb)   {  $conditionsa=$conditionsb.",";  $conditionsc .= $conditionsa;  } $conditions = substr($conditionsc, 0, strlen($conditionsc)-1); 
  foreach ($_POST['commands'] as $commandsb)   {  $commandsa=$commandsb.",";  $commandsc .= $commandsa;  } $commands = substr($commandsc, 0, strlen($commandsc)-1); 
	
	



 if($type == '1')  {  $date = ''; $time = ''; $weekdays =''; $monthdays = ''; $month=''; $conditions =''; };
 if($type == '2')  {  $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $weekdays =''; $monthdays = ''; $month=''; $conditions =''; };
 if($type == '4')  {  $date = ''; $time = ''; $timer = ''; $weekdays =''; $monthdays = ''; $month=''; };
 if($type == '5')  {  $date = ''; $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $weekdays =''; $monthdays = ''; $month=''; $conditions =''; };
 if($type == '6')  {  $date = ''; $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $monthdays = ''; $month=''; $conditions =''; };
 if($type == '7')  { $date = ''; $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $weekdays =''; $month=''; $conditions =''; };
 if($type == '8')  {  $date = ''; $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $weekdays =''; $conditions =''; };
 
mysqli_query($con,"INSERT INTO scheduler (name, switch, type, date, time, weekdays, monthdays,month,timer,datein,dateout,timein,timeout,conditions,commands)
 VALUES ('$name','0', '$type', '$date', '$time', '$weekdays', '$monthdays','$month','$timer','$datein','$dateout','$timein','$timeout','$conditions','$commands')");

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
 $date = $_POST['date'];
 $time = $_POST['time'];
 foreach ($_POST['weekdays'] as $weekdaysb)   {  $weekdaysa=$weekdaysb.",";  $weekdaysc .= $weekdaysa;  } $weekdays = substr($weekdaysc, 0, strlen($weekdaysc)-1); 
 foreach ($_POST['monthdays'] as $monthdaysb)   {  $monthdaysa=$monthdaysb.",";  $monthdaysc .= $monthdaysa;  } $monthdays = substr($monthdaysc, 0, strlen($monthdaysc)-1); 
 foreach ($_POST['month'] as $monthb)   {  $montha=$monthb.",";  $monthc .= $montha;  } $month = substr($monthc, 0, strlen($monthc)-1); 
 $timer = $_POST['timer'];
 $datein = $_POST['datein'];
 $dateout = $_POST['dateout'];
 $timein = $_POST['timein'];
 $timeout = $_POST['timeout'];
 foreach ($_POST['conditions'] as $conditionsb)   {  $conditionsa=$conditionsb.",";  $conditionsc .= $conditionsa;  } $conditions = substr($conditionsc, 0, strlen($conditionsc)-1); 
 foreach ($_POST['commands'] as $commandsb)   {  $commandsa=$commandsb.",";  $commandsc .= $commandsa;  } $commands = substr($commandsc, 0, strlen($commandsc)-1); 


 if($type == '1')  {  $date = ''; $time = ''; $weekdays =''; $monthdays = ''; $month=''; $conditions =''; };
 if($type == '2')  {  $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $weekdays =''; $monthdays = ''; $month=''; $conditions =''; };
 if($type == '4')  {  $date = ''; $time = ''; $timer = ''; $weekdays =''; $monthdays = ''; $month=''; };
 if($type == '5')  {  $date = ''; $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $weekdays =''; $monthdays = ''; $month=''; $conditions =''; };
 if($type == '6')  {  $date = ''; $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $monthdays = ''; $month=''; $conditions =''; };
 if($type == '7')  { $date = ''; $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $weekdays =''; $month=''; $conditions =''; };
 if($type == '8')  {  $date = ''; $timer = ''; $datein = ''; $dateout = ''; $timein = ''; $timeout = ''; $weekdays =''; $conditions =''; };
 
 mysqli_query($con,"UPDATE scheduler SET  name='$name', switch='$switch', type='$type', date='$date', time='$time', weekdays='$weekdays', monthdays='$monthdays',month='$month',timer='$timer',datein='$datein',dateout='$dateout',timein='$timein',timeout='$timeout',conditions='$conditions',commands='$commands' WHERE id = '$id'");

 echo "Запись изменена";
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
}

?>
		
		

	

 <div class="clearfix"></div>
  </div>

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
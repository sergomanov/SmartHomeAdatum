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
				
			
      	<?php		  

$_PAGING = new Paging($con);
$stat = $_GET['stat'];
$search = $_GET['search'];
 
 if (isset($_GET['stat'])) {

 $r = $_PAGING->get_page( "SELECT * FROM logs WHERE  stat = '$stat' ORDER BY id DESC" ); 
}
 else {
$r = $_PAGING->get_page( 'SELECT * FROM logs WHERE id LIKE "%'.$search.'%" or cont LIKE "%'.$search.'%" ORDER BY id DESC' ); 
}
  ?>

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							<br>
							 <div class="row-fluid" >
							 <div class="row-fluid dataTables_wrapper">
							 
							 <div class="btn-group"> 
							 <button onclick="return confirm('Вы действительно хотите удалить запись?')" type="submit" class="btn btn-danger btn-small btn-add "  name="del"  title="Удалить запись"><i class=" icon-trash"></i></button>	
<button onclick="return confirm('Вы действительно хотите очистить базу?')" type="submit" class="btn btn-danger btn-small btn-add pull-left"  name="truncate"  title="Очистить базу" style="margin-left: 1px;"><i class="icon-databasedelete"></i></button>	
	
	
<a class="btn btn-small btn-white dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-filter" style="font-size: 11px;"></i> <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      
					  
		<li><a href="<?php echo $imyaStranici?>?"><i class="icon-windows text-success"></i> Все события <span class=" badge badge-disable " ><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM logs");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
		<li><a href="<?php echo $imyaStranici?>?stat=3"><i class="icon-remove-sign text-danger"></i> Ошибки <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM logs WHERE stat='3'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
		<li><a href="<?php echo $imyaStranici?>?stat=2"><i class="icon-exclamation-sign text-warning"></i> Важные <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM logs WHERE stat='2'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
		<li><a href="<?php echo $imyaStranici?>?stat=1"><i class="icon-ok-circle text-success"></i> Успешные <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM logs WHERE stat='1'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
						
	
					  
                    </ul>
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
									<div class="clearfix"></div>
								</div>


  
       <table class="table no-more-tables">
                  <thead>
                <tr>
                <th width="20"> </th>
				<th width="20"> </th>
				<th width="40">  <div class="checkbox check-default"><input id="checkbox10" type="checkbox" value="1" class="checkall"><label for="checkbox10"></label></div></th>
				<th>Сообщение</th>
				<th width="160">Дата</th>
               </tr>
					
                  </thead>
				  
				
                  <tbody>

<?php	while($row = $r->fetch_assoc()){  ?>

    <tr>
                      <td></td>
					  <td>
					  <?php if($row['stat']==1){?> <i class="icon-ok-circle text-success"></i> <?php }  ?>
					  <?php if($row['stat']==2){?> <i class="icon-exclamation-sign text-warning"></i> <?php }  ?>
					  <?php if($row['stat']==3){?> <i class="icon-remove-sign text-danger"></i> <?php }  ?>
					</td>
					       <td> <div class="checkbox check-default">
									<input id="checkbox<?php	echo $row['id']; ?>" type="checkbox"  name='box[]' value=<?php	echo $row['id']; ?>>
									<label for="checkbox<?php	echo $row['id']; ?>"></label>
							</div>
					  </td>
					  <td><?php	echo $row['cont']; ?></td>
					  <td><?php	echo $row['date']; ?> / <?php	echo $row['time']; ?></td>
    </tr>

<?php	}  ?>

                  </tbody>
                </table>
			  </form>			

			  <?php
 if (isset($_POST['del'])) {$box_array = $_REQUEST['box']; foreach($box_array as $key => $value) {  mysqli_query($con,"DELETE FROM logs WHERE id='$value'");    echo  "Удалена запиь: ".$value." / ";}  
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
 }
			  

if (isset($_POST['refres'])) { echo "<SCRIPT> window.location.reload();</SCRIPT>";}
if (isset($_POST['truncate'])) {mysqli_query($con,"TRUNCATE TABLE  logs"); echo "<SCRIPT> window.location.reload();</SCRIPT>";}
?>
														
													
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
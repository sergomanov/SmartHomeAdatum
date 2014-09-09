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
 $search = $_GET['search'];
$r = $_PAGING->get_page( 'SELECT * FROM developments WHERE mode LIKE "%'.$search.'%" or id LIKE "%'.$search.'%" or address LIKE "%'.$search.'%" or vale1 LIKE "%'.$search.'%" or vale2 LIKE "%'.$search.'%" or vale3 LIKE "%'.$search.'%" or vale4 LIKE "%'.$search.'%" ORDER BY id DESC' ); 
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

<button onclick="return confirm('Вы действительно хотите удалить запись?')" type="submit" class="btn btn-danger btn-small btn-add "  name="Удалить запись"  title="del"><i class=" icon-trash"></i></button>	
<button onclick="return confirm('Вы действительно хотите очистить базу?')" type="submit" class="btn btn-danger btn-small btn-add pull-left"  name="truncate"  title="Очистить базу" style="margin-left: 1px;"><i class="icon-databasedelete"></i></button>	
	
	
<a class="btn btn-small btn-white dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-filter" style="font-size: 12px;"></i> <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      
					  
					  
			<li><a href="<?php echo $imyaStranici?>?"><i class="icon-windows text-success"></i> Все <span class=" badge badge-disable " ><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM developments");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
						
					<?php	
						
					$restype = mysqli_query($con,"SELECT * FROM `type`");
					if($restype){while($rowtype = mysqli_fetch_assoc($restype)){
					 $rowmode=$rowtype['mode'];
					?>
					
	<li><a href="<?php echo $imyaStranici?>?search=<?php echo $rowtype['mode']?>"><i class="<?php echo $rowtype['ico']?> text-success "></i> <?php echo $rowtype['mode']?> - <?php echo $rowtype['name']?> <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM developments WHERE mode='$rowmode'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
		  	
<?php						
}}					
?>
						

					  
					  
					  
					  
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
								
								<div id="email-list">									
								
								
								
								
									  


  
       <table class="table no-more-tables">
                  <thead>
                   <tr>
					
                      <th width="30"> </th>
	
	         <th width="40">  <div class="checkbox check-default">
														<input id="checkbox10" type="checkbox" value="1" class="checkall">
														<label for="checkbox10"></label>
													</div></th>
					 
					 
                     
					  <th>Тип</th>
				
					 <th>Номер устройства</th>
					  <th>Параметр 1</th>
					 <th>Параметр 2</th>
					 <th>Параметр 3</th>
					 <th>Параметр 4</th>
					  <th>Дата</th>
					  
				
				
				
                    </tr>
					
				
				
					






                  </thead>
				  
				
                  <tbody>

<?php
while($row = $r->fetch_assoc())
{

  ?>

    <tr>
<td><?php $rowmode = $row['mode']; $resico = mysqli_query($con,"SELECT * FROM `type` WHERE mode ='$rowmode'");if($resico){while($rowico = mysqli_fetch_assoc($resico)){$rowicon=$rowico['ico']; ?>
<i class="<?php echo $rowicon; ?> text-success "></i> <?php }}  ?>
</td>
					  
					       <td> <div class="checkbox check-default">
									<input id="checkbox<?php	echo $row['id']; ?>" type="checkbox"  name='box[]' value=<?php	echo $row['id']; ?>>
									<label for="checkbox<?php	echo $row['id']; ?>"></label>
							</div>
					  </td>
					
					  
					  
					  

					
					
                        <td><?php	echo $row['mode']; ?></td>
					  
					  <td width="90"><?php	echo $row['address']; ?></td>
					  
					  <td>
	
					  
					   <?php	echo $row['vale1']; ?>
					   </td>
					   
					  <td><?php	echo $row['vale2']; ?></td>
				  <td><?php	echo $row['vale3']; ?></td>
				  	  <td><?php	echo $row['vale4']; ?></td>
					  
					  <td><?php	echo $row['date']; ?> / <?php	echo $row['time']; ?></td>
					

					  
                    </tr>

<?php

}

  ?>

				  
				  
   
                  </tbody>
<?php

if (isset($_POST['del'])) { $box_array = $_REQUEST['box'];
foreach($box_array as $key => $value) {  mysqli_query($con,"DELETE FROM developments WHERE id='$value'");    echo  "Удалена запиь: ".$value." / "; } 
echo "<SCRIPT> window.location.reload();</SCRIPT>";}

if (isset($_POST['refres'])) { echo "<SCRIPT> window.location.reload();</SCRIPT>";}

if (isset($_POST['truncate'])) { mysqli_query($con,"TRUNCATE TABLE  developments"); echo "<SCRIPT> window.location.reload();</SCRIPT>";}

?>		  
				   
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
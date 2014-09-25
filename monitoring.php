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

	<link rel="stylesheet" href="css/kindeditor.css" />
	<script charset="utf-8" src="js/kindeditor.js"></script>
	<script charset="utf-8" src="js/ru_Ru.js"></script>


<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.flot.time.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.flot.selection.js"></script>
<script language="JavaScript" type="text/javascript" src="js/curvedLines.js"></script>

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
<?php	 include 'adatum.class.php' ; ?>

<div class="page-container row-fluid"> 
<div class="page-sidebar mini mini-mobile" id="main-menu" data-inner-menu="1">
 
  <?php	 include 's-slidebar.php'; ?>

   <div class="inner-menu nav-collapse">   


	<div class="inner-wrapper" >	

		<p class="menu-title"><i class="icon-monitor" style="font-size: 25px;"></i>	Мониторинг</p>		
	 </div>
	<ul class="small-items">


		
	</ul>
   </div> 
   
   
 </div>
  <a href="#" class="scrollup">Scroll</a>
  <div class="page-content"> 
    <div class="clearfix"></div>
    <div class="content">    
	 

			

<div class="col-md-12">
    <div class="row">
 
	  
	  
	  
	  
	   <div class="col-md-4 col-vlg-3 col-sm-6">
        <div class="tiles blue added-margin  m-b-20">
          <div class="tiles-body" style="padding: 3px 3px 3px 3px;">
           
		   <div class="grid simple " style="margin-bottom: 0px !important;">
                            <div class="grid-title no-border">
                                <h4>Очередь  <span class="semi-bold">Комманд</span></h4>

<div style="float:right;"><button onclick="return confirm('Вы действительно хотите очистить очередь комманд?')" type="submit" class="btn btn-danger btn-small btn-add pull-left"  name="truncate"  title="Очистить базу"><i class="icon-databasedelete"></i></button></div>
			<?php


if (isset($_POST['truncate'])) {

mysqli_query($con,"TRUNCATE TABLE  run");

 echo "<SCRIPT> window.location.reload();</SCRIPT>";
}

?>	
                             
                            </div>
							
							
                            <div class="grid-body no-border">
						
				<script> setInterval(function(){$("#block3").load("<?php   echo basename($_SERVER['PHP_SELF']);?> #block3"); }, 1000); </script>					
		 <div id="block3">		
                                  	<?php		  

$_PAGING = new Paging($con);
   $stat = $_GET['stat'];
 $search = $_GET['search'];
 

$r = $_PAGING->get_page( 'SELECT * FROM run ORDER BY id DESC' ); 

  ?>
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
									<div class="clearfix"></div>
								</div>
								
								
							
                                    <table class="table no-more-tables">
                                        <thead>
                                            <tr>
                                             
												<th style="width:10%">Состояние</th>
                                                <th style="width:30%">Комманда</th>
                                                <th style="width:20%">Дата</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
while($row = $r->fetch_assoc())
{

  ?>
                                          
                                            <tr>
                                                <td>
											
					<?php if($row['run']==0){?> <span class="label label-success">Ожидает выполнения</span> <?php }  ?>
					<?php if($row['run']==1){?> <span class="label label-info">Выполнено</span> <?php }  ?>
					   
					   
												
												
												
												</td>
                                                <td><?php	echo $row['vale']; ?></td>
                                                <td class="v-align-middle"><span class="muted"><?php	echo date("Y-m-d H:m:s", $row['unixtime']+$timezone);      ?></span></td>
                                              
                                            </tr>
											
											<?php

}

  ?>
                                        </tbody>
                                    </table>
                            </div>
							</div>
                        </div>
		   
		   
		   
		   
          </div>
        </div>
      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <div class="col-md-4 col-vlg-3 col-sm-6">
        <div class="tiles purple added-margin  m-b-20">
          <div class="tiles-body">
       
            <div class="tiles-title">Файловая система</div>
            <div class="widget-stats">
              <div class="wrapper transparent"> <span class="item-title"> Всего</span> <br><?php echo disktotal(2);  ?></div>
            </div>
            <div class="widget-stats">
                  <div class="wrapper transparent"> <span class="item-title"> Свободно</span> <br><?php echo disktotal(1);  ?></div>
            </div>
            <div class="widget-stats ">
                  <div class="wrapper transparent"> <span class="item-title"> Занято</span> <br><?php echo disktotal(3);  ?></div>
            </div>
          <div class="progress transparent progress-small no-radius m-t-20" style="width:100%">
              <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo 100-diskuse();  ?>%" ></div>
            </div>
            <div class="description"> <span class="text-white mini-description "><?php echo diskuse();  ?>% свободно на диске.</span></div>
          </div>
        </div>
      </div>
	  
  <!--   <div class="col-md-4 col-vlg-3 col-sm-6">
        <div class="tiles blue added-margin  m-b-20">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title text-black">OVERALL VISITS </div>
            <div class="widget-stats">
              <div class="wrapper transparent"> <span class="item-title">Overall Visits</span> <span class="item-count animate-number semi-bold" data-value="15489" data-animation-duration="700">0</span> </div>
            </div>
            <div class="widget-stats">
              <div class="wrapper transparent"> <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="551" data-animation-duration="700">0</span> </div>
            </div>
            <div class="widget-stats ">
              <div class="wrapper last"> <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="1450" data-animation-duration="700">0</span> </div>
            </div>
            <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
              <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="54%" ></div>
            </div>
            <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span></div>
          </div>
        </div>
      </div>
           <div class="col-md-4 col-vlg-3 visible-xlg visible-sm col-sm-6">
        <div class="tiles red added-margin  m-b-20">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title text-black">OVERALL SALES </div>
            <div class="widget-stats">
              <div class="wrapper transparent"> <span class="item-title">Overall Visits</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">0</span> </div>
            </div>
            <div class="widget-stats">
              <div class="wrapper transparent"> <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">0</span> </div>
            </div>
            <div class="widget-stats ">
              <div class="wrapper last"> <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span> </div>
            </div>
            <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
              <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="64.8%" ></div>
            </div>
            <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span></div>
          </div>
        </div>
      </div>
	  -->
      <!-- END DASHBOARD TILES -->
    </div>
    			
								
								
								
							 </div>		



			   <?php
$res9 = mysqli_query($con,"SELECT * FROM `developments` WHERE mode = 'PIR' ORDER BY `unixtime` DESC LIMIT 1"); 
if($res9){ 	while($row9 = mysqli_fetch_assoc($res9)){
//echo $row9['unixtime']."<br>";
$umax=$row9['unixtime'];
echo $umax."<br>";

}}
?>

			   <?php
$res9 = mysqli_query($con,"SELECT * FROM `developments` WHERE mode = 'PIR' ORDER BY `unixtime` ASC LIMIT 1"); 
if($res9){ 	while($row9 = mysqli_fetch_assoc($res9)){
//echo $row9['unixtime']."<br>";
$umin=$row9['unixtime'];
//echo $umin."<br>";

}}
?>


		
		<script type="text/javascript">

	$(function() {

		var d = [

		
				   <?php
$res9 = mysqli_query($con,"SELECT * FROM `developments` WHERE mode = 'PIR'"); 
if($res9){ 	while($row9 = mysqli_fetch_assoc($res9)){
//echo $row9['unixtime']."<br>";
$utime7=$row9['unixtime'];
$utime7=$utime7."000";
echo "[".$utime7.",1],";

}}
?>	
		];
	




		function weekendAreas(axes) {

			var markings = [],
			d = new Date(axes.xaxis.min);
			d.setUTCDate(d.getUTCDate() - ((d.getUTCDay() + 1) % 7))
			d.setUTCSeconds(0);
			d.setUTCMinutes(0);
			d.setUTCHours(0);

			var i = d.getTime();
			do {
				markings.push({ xaxis: { from: i, to: i + 2 * 24 * 60 * 60 * 1000 } });
				i += 7 * 24 * 60 * 60 * 1000;
			} while (i < axes.xaxis.max);

			return markings;
		}

		var options = {

		bars: {show: true, align: "center", barWidth: 0.2,},
			xaxis: {
			
				mode: "time",
				tickLength: 5
			},
	legend: {
				
				show: false
			},
			yaxis: {
			show: false,
				min: 0,
				max: 1.5
			},
			grid:   {markings: weekendAreas, backgroundColor: { colors: [ "#fff", "#fff" ] },borderWidth:1,borderColor:"#f0f0f0",margin:0,minBorderMargin:0, labelMargin:20,hoverable: true}
	
		};

		var plot = $.plot("#placeholders", [d], options);


	});

	</script>





		<div class="demo-container">
			<div id="placeholders" class="demo-placeholder"  style="width: 1500px;height: 200px;"></div>
		</div>







							 
							 </div>							
							</div>
							</div>	
			
		

	







 
<?php	
 include 's-rpanel.php'; 
?>



</body>
</html>
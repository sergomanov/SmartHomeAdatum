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
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.flot.time.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.flot.selection.js"></script>


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
 <form name="myForm" method="GET" >
<!-- BEGIN BODY -->
<body class="inner-menu-always-open">
<?php	 include 's-tophead.php'; ?>
<div class="page-container row-fluid"> 
<div class="page-sidebar mini mini-mobile" id="main-menu" data-inner-menu="1">
 
 <?php	 include 's-slidebar.php'; ?>
   <div class="inner-menu nav-collapse">   


	<div class="inner-wrapper" >	  				
		<p class="menu-title">  <i class="icon-barchartalt" style="font-size: 25px;"></i>  Графики</p>		
	 </div>
	<ul class="small-items">
		
					


	</ul>
   </div> 
   
   
 </div>
  <a href="#" class="scrollup">Scroll</a>

  <div class="page-content"> 


    <div class="clearfix"></div>

    <div class="content">    

	 
	 <div class="row"  id="inbox-wrapper">
				
			

			<div class="col-md-12">
				<div class="row">
					
					<div class="col-md-3">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							<br>
							 <div class="row-fluid" >
		
								<div id="email-list">	
		
			
				 <p>Датчик</p>
	 <select id="mode" class="form-control" name="mode"> 
		 <?php $restype = mysqli_query($con,"SELECT * FROM `type`  WHERE type='1' ");if($restype){while($rowtype = mysqli_fetch_assoc($restype)){$rowmode=$rowtype['mode']; ?>
		<option <?php 	if($_GET['mode']==$rowtype['mode']){echo "selected";}?>
		value="<?php  echo $rowtype['mode'];?>"><?php  echo $rowtype['mode'];?> - <?php  echo $rowtype['name'];?></option> 		 
		<?php }}  ?>
	</select>	
			
			 <p>Номер устройства</p>
			 <select name="address[]" id="address" class="select2" style="width:100%" multiple>
                  <?php $restype = mysqli_query($con,"SELECT * FROM `namedev`  ");if($restype){while($rowtype = mysqli_fetch_assoc($restype)){$rowmode=$rowtype['mode']; ?>
	<option 
	<?php foreach ($_GET['address'] as $daysb)   {  $daysa=",".$daysb.",";  $daysc .= $daysa;  } $addr = substr($daysc, 0, strlen($daysc)-1);
	if(strpos($addr,  $rowtype['address'])!=NULL){echo "selected";}
		?>
	
		value="<?php  echo $rowtype['address'];?>"><?php  echo $rowtype['address'];?> - <?php  echo $rowtype['name'];?></option> 		 

<?php }}  ?> 
            </select>
			

		
		
			     <p>Начало(в минутах) </p>
		    <script type="text/javascript">			$(function(){	$('#datein').datetimepicker({	altField: "#timein",timeFormat: 'HH:mm:ss',numberOfMonths: 2});});		</script>
			<div class="col-md-6" style="padding-left: 0px;"><input type="text" name="datein" id="datein" value="<?php 	if($_GET['datein']){echo $_GET['datein'];}?>" style="width:100%" /></div>
			<div class="col-md-6" style="padding-left: 0px;"><input type="text" name="timein" id="timein" value="<?php 	if($_GET['timein']){echo $_GET['timein'];}?>" style="width:100%" /></div>
			

			  
				
			  <p>Окончание(в минутах) </p>
			<script type="text/javascript">			$(function(){	$('#dateout').datetimepicker({	altField: "#timeout",timeFormat: 'HH:mm:ss',numberOfMonths: 2,});});		</script>
			<div class="col-md-6" style="padding-left: 0px;"><input type="text" name="dateout" id="dateout" value="<?php 	if($_GET['dateout']){echo $_GET['dateout'];}?>" style="width:100%" /></div>
			<div class="col-md-6" style="padding-left: 0px;"><input type="text" name="timeout" id="timeout" value="<?php 	if($_GET['timeout']){echo $_GET['timeout'];}?>" style="width:100%" /></div>
		
				<br><br>

<button type="button" onclick="chText()" class="btn btn-default btn-small btn-cons">Последний час</button>			
<button type="button" onclick="segText()" class="btn btn-default btn-small btn-cons">Сегодня</button>
<button type="button" onclick="vchText()" class="btn btn-default btn-small btn-cons">Вчера</button>
<button type="button" onclick="weText()" class="btn btn-default btn-small btn-cons">Прошлая неделя</button>
<button type="button" onclick="meText()" class="btn btn-default btn-small btn-cons">Прошлый месяц</button>

					<br><br>
<script type="text/javascript">

function checknull(i) {
var i;
if (i<10) 
i = "0"+i;
return i;
}
function chText(el){

var d=new Date();
var day=d.getDate();
var month=d.getMonth() + 1;
var year=d.getFullYear();
var m = new Date();

	document.getElementById('datein').value = year + "-" + checknull(month) + "-" + checknull(day);
	document.getElementById('timein').value = checknull(m.getHours()-1) + ":" + checknull(m.getMinutes()) + ":" + checknull(m.getSeconds());

	
	document.getElementById('dateout').value = year + "-" + checknull(month) + "-" + checknull(day);
	document.getElementById('timeout').value = checknull(m.getHours()) + ":" + checknull(m.getMinutes()) + ":" + checknull(m.getSeconds());

}

function segText(el){

var d=new Date();
var day=d.getDate();
var month=d.getMonth() + 1;
var year=d.getFullYear();
var m = new Date();

	document.getElementById('datein').value = year + "-" + checknull(month) + "-" + checknull(day);
	//document.getElementById('timein').value = m.getHours() + ":" + m.getMinutes() + ":" + m.getSeconds();
	document.getElementById('timein').value = "00:00:00";
	
	document.getElementById('dateout').value = year + "-" + checknull(month) + "-" + checknull(day);
	document.getElementById('timeout').value = "24:59:59";

}

function vchText(el){

var d=new Date();
var day=d.getDate() -1;
var month=d.getMonth() + 1;
var year=d.getFullYear();
var m = new Date();

	document.getElementById('datein').value = year + "-" + checknull(month) + "-" + checknull(day);
	//document.getElementById('timein').value = m.getHours() + ":" + m.getMinutes() + ":" + m.getSeconds();
	document.getElementById('timein').value = "00:00:00";
	
	document.getElementById('dateout').value = year + "-" + checknull(month) + "-" + checknull(day);
	document.getElementById('timeout').value = "24:59:59";

}

function weText(el){

var d=new Date();
var day=d.getDate();
var day7=d.getDate();

var month=d.getMonth() + 1;

var year=d.getFullYear();
var m = new Date();

	document.getElementById('datein').value = year + "-" + checknull(month) + "-" + checknull(day7);
	document.getElementById('timein').value = "00:00:00";
	
	document.getElementById('dateout').value = year + "-" + checknull(month) + "-" + checknull(day);
	document.getElementById('timeout').value = "24:59:59";

}

function meText(el){

var d=new Date();
var day=d.getDate();
var month=d.getMonth() + 1;
var months=d.getMonth() ;

var year=d.getFullYear();
var m = new Date();

	document.getElementById('datein').value = year + "-" + checknull(months) + "-" + checknull(day);
	document.getElementById('timein').value = "00:00:00";
	
	document.getElementById('dateout').value = year + "-" + checknull(month) + "-" + checknull(day);
	document.getElementById('timeout').value = "24:59:59";

}


	</script>
				
			
					    <button type="submit" class="btn btn-sm btn-small btn-primary" name="printlines" value="" ><i class="icon-featheralt-write"></i> Отрисовать</button>

						
		
								
							 </div>							
							 </div>							
							</div>
							</div>	
						</div>
					
					<div class="col-md-9">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							<br>
							 <div class="row-fluid" >
							 <div class="row-fluid dataTables_wrapper">

								<div class="pull-right margin-top-20">
									
								
									
									</div>
									<div class="clearfix"></div>
								</div>
								
			
  

		
	<script type="text/javascript">

	$(function() {
		<?php 	
		$mode = $_GET['mode'];
		$datein = $_GET['datein'];
		$dateout = $_GET['dateout'];
		
		$timein = $_GET['timein'];
		$timeout = $_GET['timeout'];
		
		foreach ($_GET['address'] as $weekdaysb)   {  $weekdaysa="'".$weekdaysb."',";  $weekdaysc .= $weekdaysa;  } $address = substr($weekdaysc, 0, strlen($weekdaysc)-1); 
		
		$reschart = mysqli_query($con,"SELECT * FROM `namedev` WHERE address IN ($address)");	if($reschart) {   while($rowchart = mysqli_fetch_assoc($reschart)) 	 {	
		$address=$rowchart['address'];
		
	$commandsa="d".$rowchart['id'].",";  
	$commandsc .= $commandsa;  
	
	$datetimein=strtotime($_GET['datein'].$_GET['timein'])+$timezone;
	$datetimeout=strtotime($_GET['dateout'].$_GET['timeout'])+$timezone;

		?>	
		
		
		
		
var d<?php echo $rowchart['id'];?> = [	<?php 	$res8 = mysqli_query($con,"SELECT * FROM `developments` WHERE address ='$address' AND mode='$mode' AND unixtime >='$datetimein' AND unixtime <='$datetimeout' ");	if($res8) {   while($row8 = mysqli_fetch_assoc($res8)) 	 {	?>		
	
	[<?php echo $row8['unixtime']."000";?>, <?php echo $row8['vale1'];?>],
	
	<?php	 }}	?>		];
			
		<?php	 }}				$commands = substr($commandsc, 0, strlen($commandsc)-1); 		?>	
			
		function weekendAreas(axes) {
			var markings = [],	d = new Date(axes.xaxis.min);
			d.setUTCDate(d.getUTCDate() - ((d.getUTCDay() + 1) % 7))
			d.setUTCSeconds(0);		d.setUTCMinutes(0);		d.setUTCHours(0);		var i = d.getTime();
			do {markings.push({ xaxis: { from: i, to: i + 2 * 24 * 60 * 60 * 1000 } });	i += 7 * 24 * 60 * 60 * 1000;} while (i < axes.xaxis.max);	return markings;}

		var options = {
			series: {lines: {show: true}  }, 	xaxis: {mode: "time",tickLength: 5},selection: {mode: "x"},
			grid: {	markings: weekendAreas,	backgroundColor: { colors: [ "#fff", "#fff" ] },	borderWidth:1,borderColor:"#f0f0f0",	margin:0,	minBorderMargin:0,labelMargin:20,hoverable: true,mouseActiveRadius:6},
			legend: { show: false}	};
			


		$.plot("#placeholder", [ <?php echo $commands;?> ],options);
		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");


	});

	</script>



				
			
           <div id="placeholder" style="width: 100%;	height: 450px;"></div>

			


			
								
						
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
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
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							
							 <div class="row-fluid" >
							
								
								<div id="email-list">		


			<br>
			<input  type="hidden"  name="id" id="id" class="form-control"  placeholder="">
			
			

		 
			<p>Наименование </p>
            <input id="name" name="name" type="text" class="form-control" maxlength="27" placeholder="Наименование">
		

	
<p>Номер устройства</p>
	<div class="select-editable">
    <select onchange="this.nextElementSibling.value=this.value">
       		<?php    $resulte = mysqli_query($con,"SELECT address FROM developments GROUP BY address ");while($rowe = mysqli_fetch_assoc($resulte)) { ?> 
			<option value="<?php  echo $rowe['address'];?>"><?php  echo $rowe['address'];?></option> 	
		<?php 					}					?> 
    </select>
    <input type="text" id="address" name="address" maxlength="8" value="" />
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
$search = $_GET['mode'];
$r = $_PAGING->get_page( 'SELECT * FROM namedev ORDER BY id DESC' ); 
   
  ?>

			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							<br>
							 <div class="row-fluid" >
							 <div class="row-fluid dataTables_wrapper">

							 <button onclick="return confirm('Вы действительно хотите удалить псевдонимы устройств?')" type="submit" class="btn btn-danger btn-small btn-add pull-left"  name="del"  title="del"><i class=" icon-trash"></i></button>	

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
					 <th width="20"></th>
               		 <th width="60">  <div class="checkbox check-default"><input id="checkbox10" type="checkbox" value="1" class="checkall"><label for="checkbox10"></label></div></th>
				 	 <th>Номер устройства</th>
                     <th>Наименование</th>
                </tr>
             </thead>
				  
  <tbody>

<?php
while($row = $r->fetch_assoc())
{

  ?>

   <tr>
		<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><i class="icon-edit text-success"></i></a></td>
		<td> <div class="checkbox check-default"><input id="checkbox<?php	echo $row['id']; ?>" type="checkbox"  name='box[]' value=<?php	echo $row['id']; ?>><label for="checkbox<?php	echo $row['id']; ?>"></label></div></td>
		<td width="160"><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><?php	echo $row['address']; ?></a></td>
		<td> <a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><span style="color: #2271D8;"><?php	echo $row['name']; ?><br></span></a> </td>
                      



			  
<script type="text/javascript">
function getText<?php echo $row['id'];?>(el){

	document.getElementById('id').value = '<?php	echo $row['id']; ?>';
	document.getElementById('name').value = '<?php	echo $row['name']; ?>';
	document.getElementById('address').value = '<?php	echo $row['address']; ?>';
	document.myForm.edit.disabled = false;
	document.myForm.clinss.disabled = false;

}
</script>
		<script type="text/javascript">
		function clin(){
	document.getElementById('id').value = '';
	document.getElementById('name').value = '';
	document.getElementById('address').value = '';
	document.myForm.edit.disabled = true;
	document.myForm.clinss.disabled = true;
		}
	</script>
					  
                    </tr>

<?php }   ?>

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
 {  mysqli_query($con,"DELETE FROM namedev WHERE id='$value'");    echo  "Удалена запиь: ".$value." / "; } 
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
 }

	

if (isset($_POST['save'])) {
$name = $_POST['name'];
$address = $_POST['address'];
mysqli_query($con,"INSERT INTO namedev (name, address) VALUES ('$name', '$address')");
echo "Запись добавлена";
echo "<SCRIPT> window.location.reload();</SCRIPT>";
}



if (isset($_POST['refres'])) { echo "<SCRIPT> window.location.reload();</SCRIPT>";}

if (isset($_POST['edit'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
mysqli_query($con,"UPDATE namedev SET name='$name',address ='$address'  WHERE id = '$id'");
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



</body>
</html>
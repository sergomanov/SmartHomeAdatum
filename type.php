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

<script src="js/s-core.js" type="text/javascript"></script> 
<script src="js/s-chat.js" type="text/javascript"></script> 
<script src="js/s-demo.js" type="text/javascript"></script> 
<script src="js/select2.js"></script>


<link href="css/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="js/bootstrap-colorpicker.min.js"></script>
<script src="js/docs.js"></script>		
			
			
			
			
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

  <?php	 include 's-settmenu.php'; ?>

   
 </div>
  <a href="#" class="scrollup">Scroll</a>
  <div class="page-content"> 
    <div class="clearfix"></div>
    <div class="content">    
 
  <style type="text/css">
  .the-icons {
      list-style: none outside none;
      margin-left: 0;
  }
  .the-icons li {
      float: left;
      line-height: 25px;
      width: 25%;
  }
  .the-icons i:hover {
      background-color: rgba(255, 0, 0, 0.25);
  }
  .the-icons i {
color: #0aa699;
width: 32px;
font-size: 24px;
display: inline-block;
text-align: right;
margin-right: 10px;
}
.prokrutka {
padding-right: 15px;
padding-left: 15px;
height:300px; /* высота нашего блока */
background: #fff; /* цвет фона, белый */
margin: 10px;
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

}

.prok {
margin-right: 15px;
margin-left: -10px;
}




 </style>
			  <div class="row prok" >
					<div id="whatever" style="display:none" class="col-md-12 prokrutka">
							<div class="grid simple" >
								<div class="grid-body no-border email-body" >
									<div class="row tiles-container tiles white m-b-20 ">					
										<ul class="the-icons clearfix">
										<?php	 include 's-ico.php';  ?>
										</ul>					
								 </div>
							  </div> 
						  </div> 
					 </div> 
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

	

			<p>Режим </p>

<select id="type" class="form-control" name="type" onChange="javascript: go(this);" style="width:100%"> 

<option value="0"></option> 

<option value="1">1 - Модуль (1 параметр)</option> 
<option value="2">2 - Модуль (2 параметра)</option>
<option value="3">3 - Модуль (3 параметра)</option>
<option value="4">4 - Модуль (Без параметров)</option> 

</select>

 <div id="i_chart" style="display: none"><p>Тип Графика</p>
 	<div class="radio radio-success">
	
                        <input id="mradio0" type="radio" name="tchart" value="0">
                        <label for="mradio0">Линейный</label>
						
                        <input id="mradio1" type="radio" name="tchart" value="1">
                        <label for="mradio1">Бары</label><br>
    </div>
 
 </div>
 
 
	<div id="i_vale4"><p>Условие</p>
	<div class="radio radio-success">
	
                        <input id="radio0" type="radio" name="regim" value="0">
                        <label for="radio0"><> RS-485 (прием - отправка)</label><br>
						
                        <input id="radio1" type="radio" name="regim" value="1">
                        <label for="radio1">> RS-485 (только прием)</label><br>
						
						<input id="radio3" type="radio" name="regim" value="3">
                        <label for="radio3">< RS-485 (только отправка)</label><br>
						
						<input id="radio2" type="radio" name="regim" value="2">
                        <label for="radio2">Основной модуль</label>
                      </div>
					  </div> 



	<div id="i_all" style="display: none">
	<p>Иконка </p>
	<div  class="input-group">
				  <span onclick="showHide('whatever');" class="input-group-addon primary">				  
				  <span class="arrow"></span>
					<i id="icoclass" class="icon-dollar"></i>
				  </span>
				  <input type="text" class="form-control" id="ico" name="ico" style="height: 30px;" >
				</div>
				

	<p>Цвет Иконки </p>
	<input type="text" id="icocolor" name="icocolor" class="form-control demo demo-1 demo-auto form-control" value="#5367ce" />		


<p>Тип</p>
	<div class="select-editable">
    <select onchange="this.nextElementSibling.value=this.value">
       		<?php    $resulte = mysqli_query($con,"SELECT mode FROM developments GROUP BY mode ");while($rowe = mysqli_fetch_assoc($resulte)) { ?> 
			<option value="<?php  echo $rowe['mode'];?>"><?php  echo $rowe['mode'];?></option> 	
		<?php 					}					?> 
    </select>
    <input type="text" id="mode" name="mode" maxlength="4" value="" />
</div>



</div>
	
<div id="i_simvol" style="display: none">
	<p>Символ</p>
<div class="select-editable">
    <select onchange="this.nextElementSibling.value=this.value">
			<option value="%">%</option> 	
			<option value="С°">С°</option> 
    </select>
    <input type="text" id="symbol" name="symbol" maxlength="4" value="" />
</div>
</div>
	
  
	
	
 <div id="i_parm1" style="display: none"><p>Параметр 1</p><input id="namevalue1" name="namevalue1" type="text" class="form-control" maxlength="20" placeholder="Наименование 1"></div>
 <div id="i_parm2" style="display: none"><p>Параметр 2</p><input id="namevalue2" name="namevalue2" type="text" class="form-control" maxlength="20" placeholder="Наименование 2"></div>	
 <div id="i_parm3" style="display: none"><p>Параметр 3</p><input id="namevalue3" name="namevalue3" type="text" class="form-control" maxlength="20" placeholder="Наименование 3"></div>
 <div id="i_parm4" style="display: none"><p>Параметр 4</p><input id="namevalue4" name="namevalue4" type="text" class="form-control" maxlength="20" placeholder="Наименование 4"></div>

				   
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


 if (isset($_GET['type'])) {

 $r = $_PAGING->get_page( "SELECT * FROM type WHERE  type = '$type' ORDER BY id DESC" ); 
}
 else {
$r = $_PAGING->get_page( 'SELECT * FROM type  ORDER BY id DESC' ); 
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
							 <div class="btn-group"> 
							  <button onclick="return confirm('Вы действительно хотите удалить псевдонимы устройств?')" type="submit" class="btn btn-danger btn-small btn-add pull-left"  name="del"  title="del"><i class=" icon-trash"></i></button>	

<a class="btn btn-small btn-white dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-filter" style="font-size: 12px;"></i> <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      
					  
		<li><a href="<?php echo $imyaStranici?>?"><i class="icon-windows text-success"></i> Все типы <span class=" badge badge-disable " ><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM type");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
		<li><a href="<?php echo $imyaStranici?>?type=1"><i class=" icon-dieone text-danger"></i> 1 - Модуль измерения(1 параметр) <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM type WHERE type='1'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
		<li><a href="<?php echo $imyaStranici?>?type=2"><i class=" icon-dietwo text-warning"></i> 2 - Модуль контроля(2 параметра) <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM type WHERE type='2'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
		<li><a href="<?php echo $imyaStranici?>?type=3"><i class=" icon-diethree text-success"></i> 3 - Модуль управления(3 параметра) <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM type WHERE type='3'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
			<li><a href="<?php echo $imyaStranici?>?type=4"><i class=" icon-diefour text-success"></i> 4 - Подтверждение(Без параметров) <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM type WHERE type='4'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
									
					  

					  
					  
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
					 <th width="20"></th>
					 <th width="20"></th>
               		 <th width="60">  <div class="checkbox check-default"><input id="checkbox10" type="checkbox" value="1" class="checkall"><label for="checkbox10"></label></div></th>
					<th>Наименование</th>				 	
					<th width="50">Тип</th>
					 <th width="20">Режим</th>
					 <th width="20">Символ</th>
                   
					 <th>Наименование 1</th>
					 <th>Наименование 2</th>
					 <th>Наименование 3</th>
					 <th width="100">Режим</th>
	
                </tr>
             </thead>
				  
  <tbody>

<?php
while($row = $r->fetch_assoc())
{

  ?>

   <tr>
		<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><i class="<?php	echo $row['ico']; ?> text-success" style="color: <?php	echo $row['color']; ?> !important;"></i></a></td>
	
	<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()">
	<?php if($row['tchart']==0){echo "<i class='icon-line' style='color:#ccc;'></i>";}?>
	<?php if($row['tchart']==1){echo "<i class='icon-barchart' style='color:#ccc;'></i>";}?>

	</a></td>

 
	
		<td> <div class="checkbox check-default"><input id="checkbox<?php	echo $row['id']; ?>" type="checkbox"  name='box[]' value=<?php	echo $row['id']; ?>><label for="checkbox<?php	echo $row['id']; ?>"></label></div></td>
<td> <a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><span style="color: #2271D8;"><?php	echo $row['name']; ?><br></span></a> </td>	
	<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><?php	echo $row['mode']; ?></a></td>
		<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><?php	echo $row['type']; ?></a></td>
		<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><?php	echo $row['symbol']; ?></a></td>
		
          <td> <a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><span style="color: #2271D8;"><?php	echo $row['namevalue1']; ?><br></span></a> </td>
<td> <a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><span style="color: #2271D8;"><?php	echo $row['namevalue2']; ?><br></span></a> </td>
<td> <a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><span style="color: #2271D8;"><?php	echo $row['namevalue3']; ?><br></span></a> </td>
	  
	<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()">
	
	<?php	if($row['regim']==0){echo "<div style='color: #4DD847; font-size: 10px;'> <> RS-485<i class=' icon-handswipe'></i></div>";} ?>
	<?php	if($row['regim']==3){echo "<div style='color: #506AAF; font-size: 10px;'> < RS-485<i class=' icon-swipeup'></i></div>";} ?>
	<?php	if($row['regim']==1){echo "<div style='color: #FF00FF; font-size: 10px;'> > RS-485<i class='  icon-swipedown'></i></div>";} ?>
	<?php	if($row['regim']==2){echo "<div style='color: #DF8AA2; font-size: 10px;'>Local <i class='icon-gpu-graphicscard'></i></div>";} ?>

	</a></td>


			  
<script type="text/javascript">
function getText<?php echo $row['id'];?>(el){

	document.getElementById('id').value = '<?php	echo $row['id']; ?>';
	document.getElementById('name').value = '<?php	echo $row['name']; ?>';
	document.getElementById('mode').value = '<?php	echo $row['mode']; ?>';
	document.getElementById('ico').value = '<?php	echo $row['ico']; ?>';
	document.getElementById('icocolor').value = '<?php	echo $row['color']; ?>';
	
	document.getElementById('symbol').value = '<?php	echo $row['symbol']; ?>';
	document.getElementById('icoclass').className  = '<?php	echo $row['ico']; ?>';
	document.getElementById("radio<?php	echo $row['regim']; ?>").checked = true; 
	document.getElementById("mradio<?php	echo $row['tchart']; ?>").checked = true; 
	$('#type').val('<?php	echo $row['type']; ?>').change();
	document.getElementById('namevalue1').value = '<?php	echo $row['namevalue1']; ?>';
	document.getElementById('namevalue2').value = '<?php	echo $row['namevalue2']; ?>';
	document.getElementById('namevalue3').value = '<?php	echo $row['namevalue3']; ?>';
	document.getElementById('namevalue4').value = '<?php	echo $row['namevalue4']; ?>';		
	document.myForm.edit.disabled = false;
	document.myForm.clinss.disabled = false;

}
</script>
		<script type="text/javascript">
function clin(){
	document.getElementById('id').value = '';
	document.getElementById('name').value = '';
	document.getElementById('mode').value = '';
	document.getElementById('ico').value = '';
	document.getElementById('icocolor').value = '';
	document.getElementById('symbol').value = '';
	document.getElementById('icoclass').className  = '';
	$('#type').val('').change();
	document.getElementById('namevalue1').value = '';
	document.getElementById('namevalue2').value = '';
	document.getElementById('namevalue3').value = '';
	document.getElementById('namevalue4').value = '';
	document.myForm.edit.disabled = true;
	document.myForm.clinss.disabled = true;
		}
	</script>
			
<script type="text/javascript">
 function go(i_page) 
  { 
    var val_i_page = i_page.value;
 

  if(val_i_page==0)
 {
 
 document.getElementById('i_all').style.display="none";
  document.getElementById('i_simvol').style.display="none";
document.getElementById('i_parm1').style.display="none";
document.getElementById('i_parm2').style.display="none";
document.getElementById('i_parm3').style.display="none";
document.getElementById('i_parm4').style.display="none";
document.getElementById('i_chart').style.display="none";
	
	}
	
 if(val_i_page==1)
 {
  document.getElementById('i_all').style.display="block";
document.getElementById('i_parm1').style.display="block";
  document.getElementById('i_simvol').style.display="block";
document.getElementById('i_parm2').style.display="none";
document.getElementById('i_parm3').style.display="none";
document.getElementById('i_parm4').style.display="none";
document.getElementById('i_chart').style.display="block";
	
	}
	
	 if(val_i_page==2)
 {
  document.getElementById('i_all').style.display="block";
document.getElementById('i_parm1').style.display="block";
  document.getElementById('i_simvol').style.display="none";
document.getElementById('i_parm2').style.display="block";
document.getElementById('i_parm3').style.display="none";
document.getElementById('i_parm4').style.display="none";
document.getElementById('i_chart').style.display="none";
	}		
		 if(val_i_page==3)
 {
  document.getElementById('i_all').style.display="block";
document.getElementById('i_parm1').style.display="block";
  document.getElementById('i_simvol').style.display="none";
document.getElementById('i_parm2').style.display="block";
document.getElementById('i_parm3').style.display="block";
document.getElementById('i_parm4').style.display="none";
document.getElementById('i_chart').style.display="none";
	}	
if(val_i_page==4)
 {
  document.getElementById('i_all').style.display="block";
document.getElementById('i_parm1').style.display="none";
  document.getElementById('i_simvol').style.display="none";
document.getElementById('i_parm2').style.display="none";
document.getElementById('i_parm3').style.display="none";
document.getElementById('i_parm4').style.display="none";
document.getElementById('i_chart').style.display="none";
	}
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
 {  mysqli_query($con,"DELETE FROM type WHERE id='$value'");    echo  "Удалена запиь: ".$value." / "; } 
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
 }

	

if (isset($_POST['save'])) {

$name = $_POST['name'];
$type = $_POST['type'];
$ico = $_POST['ico'];
$mode = $_POST['mode'];
$symbol = $_POST['symbol'];
$namevalue1 = $_POST['namevalue1'];
$namevalue2 = $_POST['namevalue2'];
$namevalue3 = $_POST['namevalue3'];
$namevalue4 = $_POST['namevalue4'];
$regim = $_POST['regim'];
$tchart = $_POST['tchart'];
$colorss = $_POST['icocolor'];

 if($type == '1') {  $namevalue2='';  $namevalue3=''; };
 if($type == '2') {  $namevalue3=''; $namevalue4=''; };
 if($type == '3') {  $namevalue4=''; };
 if($type == '4') {  $namevalue1=''; $namevalue2='';  $namevalue3=''; $namevalue4=''; };

mysqli_query($con,"INSERT INTO type (name,type,ico,mode,symbol,namevalue1,namevalue2,namevalue3,namevalue4,regim,tchart,color) VALUES ('$name','$type','$ico','$mode','$symbol','$namevalue1','$namevalue2','$namevalue3','$namevalue4','$regim','$tchart','$colorss')");
echo "Запись добавлена";
echo "<SCRIPT> window.location.reload();</SCRIPT>";
}



if (isset($_POST['refres'])) { echo "<SCRIPT> window.location.reload();</SCRIPT>";}

if (isset($_POST['edit'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$ico = $_POST['ico'];
$mode = $_POST['mode'];
$symbol = $_POST['symbol'];
$namevalue1 = $_POST['namevalue1'];
$namevalue2 = $_POST['namevalue2'];
$namevalue3 = $_POST['namevalue3'];
$namevalue4 = $_POST['namevalue4'];
$regim = $_POST['regim'];
$tchart = $_POST['tchart'];
$colorss = $_POST['icocolor'];
 if($type == '1') {  $namevalue2='';  $namevalue3=''; };
 if($type == '2') {  $namevalue3=''; $namevalue4=''; };
 if($type == '3') {  $namevalue4=''; };
 if($type == '4') {  $namevalue1=''; $namevalue2='';  $namevalue3=''; $namevalue4=''; };

mysqli_query($con,"UPDATE type SET name='$name',type='$type',ico='$ico',mode='$mode',symbol='$symbol',namevalue1='$namevalue1',namevalue2='$namevalue2',namevalue3='$namevalue3',namevalue4='$namevalue4',regim='$regim',tchart='$tchart',color='$colorss'  WHERE id = '$id'");
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
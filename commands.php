<!DOCTYPE html>
<html>
<head>
<?php	

 include 's-head.php';
 include 's-lib.php'; 
  include 'autt.php';
 ?>

<link rel="stylesheet" type="text/css" media="all" href="css/googlefont.css" />
*
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
			<input  type="hidden"  name="id" id="id" class="form-control"  placeholder="">
			<input  type="hidden"  name="rowtypen" id="rowtypen" class="form-control"  placeholder="">
			
			
<p>Тип </p>
<select id="mode" class="form-control" name="mode" onChange="javascript: go(this);" style="width:100%"> 
<option value="0"></option> 
<?php $restype = mysqli_query($con,"SELECT * FROM `type`"); if($restype){while($rowtype = mysqli_fetch_assoc($restype)){ $rowmode=$rowtype['mode']; ?>
			<option value="<?php echo $rowtype['mode']?>"><?php echo $rowtype['mode']?> - <?php echo $rowtype['name']?></option> 

<?php		}}   ?>

</select>
	  




		  <div id="i_name" style="display: none"> 
			<p>Наименование </p>
            <input id="name" name="name" type="text" class="form-control" placeholder="Наименование">
		  </div> 	

		<div id="i_address" style="display: none">
		 <p>Номер устройства</p>
		 <select id="address" class="form-control" name="address"> 
		 <option value="0">00000000</option> 
		  <?php    $resulte = mysqli_query($con,"SELECT * FROM namedev GROUP BY address ");while($rowe = mysqli_fetch_assoc($resulte)) { ?> 
			<option value="<?php  echo $rowe['address'];?>"><?php  echo $rowe['address'];?> - <?php  echo $rowe['name'];?></option> 	
		<?php 					}					?> 
		</select>	
		</div> 
		
		<div id="i_vale4" style="display: none"><p>Условие</p><div class="radio radio-success">
                        <input id="radio0" type="radio" name="vale4" value="0">
                        <label for="radio0">Равно =</label>
                        <input id="radio1" type="radio" name="vale4" value="1" >
                        <label for="radio1">Больше ></label>
						<input id="radio2" type="radio" name="vale4" value="2">
                        <label for="radio2">Меньше <</label>
                      </div></div> 
				

		<p id="i_vale1_name"></p>
		<div id="i_vale1" style="display: none"><input type="text" name="vale1" id="vale1" class="form-control" placeholder=""> </div> 

	
		<p id="i_vale2_name"></p>
		<div id="i_vale2" style="display: none"><input type="text" name="vale2" id="vale2" class="form-control" placeholder=""> </div> 
		
		<p id="i_vale3_name" ></p>
		<div id="i_vale3" style="display: none"><input type="text" name="vale3" id="vale3" class="form-control" placeholder=""> </div> 
			
				
		
<script type="text/javascript">
function go(i_page) 
  { 
    var val_i_page = i_page.value;

  if(val_i_page==0)
 {
 
	document.getElementById('i_name').style.display="none";
    document.getElementById('i_address').style.display="none";
	document.getElementById('i_vale1').style.display="none";
	document.getElementById('i_vale2').style.display="none";
	document.getElementById('i_vale3').style.display="none";
	document.getElementById('i_vale4').style.display="none";
	document.getElementById('i_vale1_name').innerHTML='';
	document.getElementById('i_vale2_name').innerHTML='';
	document.getElementById('i_vale3_name').innerHTML='';
	
	
	}
	
<?php    $resscr = mysqli_query($con,"SELECT * FROM type");while($rowscr = mysqli_fetch_assoc($resscr)) { ?> 
		
 if(val_i_page=='<?php echo $rowscr['mode'];?>')
 {
	
	document.getElementById('i_vale1_name').innerHTML='<?php echo $rowscr['namevalue1'];?>';
	document.getElementById('i_vale2_name').innerHTML='<?php echo $rowscr['namevalue2'];?>';
	document.getElementById('i_vale3_name').innerHTML='<?php echo $rowscr['namevalue3'];?>';
 
 <?php if($rowscr['type']==1){ ?>
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_address').style.display="block";
	document.getElementById('i_vale1').style.display="block";
	document.getElementById('i_vale2').style.display="none";
	document.getElementById('i_vale3').style.display="none";
	document.getElementById('i_vale4').style.display="block";
<?php } ?> 

 <?php if($rowscr['type']==2){ ?>
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_address').style.display="block";
	document.getElementById('i_vale1').style.display="block";
	document.getElementById('i_vale2').style.display="block";
	document.getElementById('i_vale3').style.display="none";
	document.getElementById('i_vale4').style.display="none";
<?php } ?> 

 <?php if($rowscr['type']==3){ ?>
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_address').style.display="block";
	document.getElementById('i_vale1').style.display="block";
	document.getElementById('i_vale2').style.display="block";
	document.getElementById('i_vale3').style.display="block";
	document.getElementById('i_vale4').style.display="none";
<?php } ?> 

 <?php if($rowscr['type']==4){ ?>
	document.getElementById('i_name').style.display="block";
    document.getElementById('i_address').style.display="block";
	document.getElementById('i_vale1').style.display="none";
	document.getElementById('i_vale2').style.display="none";
	document.getElementById('i_vale3').style.display="none";
	document.getElementById('i_vale4').style.display="none";
<?php } ?> 

	


	
	}
	 	
<?php } ?> 
	

  } 
</script> 	
				   
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
			
<?php	 $_PAGING = new Paging($con);	$search = $_GET['mode'];
$r = $_PAGING->get_page( 'SELECT * FROM commands WHERE mode LIKE "%'.$search.'%" or id LIKE "%'.$search.'%" or address LIKE "%'.$search.'%" or vale1 LIKE "%'.$search.'%" or vale2 LIKE "%'.$search.'%" or vale3 LIKE "%'.$search.'%" or name LIKE "%'.$search.'%" ORDER BY id DESC' ); 
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
<li><a href="<?php echo $imyaStranici?>?"><i class="icon-windows text-success"></i> Все <span class=" badge badge-disable " >
<?php $result= mysqli_query($con, "SELECT COUNT(1) FROM commands");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>

<?php $restype = mysqli_query($con,"SELECT * FROM `type`");if($restype){while($rowtype = mysqli_fetch_assoc($restype)){$rowmode=$rowtype['mode']; ?>
<li><a href="<?php echo $imyaStranici?>?mode=<?php echo $rowtype['mode']?>"><i class="<?php echo $rowtype['ico']?> text-success "></i> <?php echo $rowtype['mode']?> - <?php echo $rowtype['name']?> <span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM commands WHERE mode='$rowmode'");$row=mysqli_fetch_array($result);echo $row[0];?></span></a></li>
<?php }}  ?>
                    </ul>
				
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
						<th>Тип</th>
				    <th>  <div class="checkbox check-default"><input id="checkbox10" type="checkbox" value="1" class="checkall"><label for="checkbox10"></label></div></th>
                    <th>Наименование</th>
				
					 <th>Номер устройства</th>
					  <th>Условие</th>
					 <th>Параметр 1</th>
					 <th>Параметр 2</th>
					  <th width="190" style="background-color: #ecf0f2;">Отработало</th>					 
                    </tr>
					
                  </thead>
				  
				
                  <tbody>

<?php  while($row = $r->fetch_assoc()){  ?>

   <tr>
    
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()">
<?php $rowmode = $row['mode']; $resico = mysqli_query($con,"SELECT * FROM `type` WHERE mode ='$rowmode'");if($resico){while($rowico = mysqli_fetch_assoc($resico)){$rowicon=$rowico['ico']; ?>
<i class="<?php echo $rowicon; ?> text-success "></i> <?php }}  ?></a>
</td>
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()" id="text"><?php	echo $row['mode']; ?></a></td>  

					  
<td> <div class="checkbox check-default"><input id="checkbox<?php	echo $row['id']; ?>" type="checkbox"  name='box[]' value=<?php	echo $row['id']; ?>><label for="checkbox<?php	echo $row['id']; ?>"></label></div></td>			
<td> <a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()" id="text"><span style="color: #2271D8;"><?php	echo $row['name']; ?><br></span></a> </td>

<td width="90">  <a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><?php	echo $row['address']; ?></a></td>
					  
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()">
					    <?php if($row['vale4']==0){?> <i class="icon-equals" style="color: #A4CA2A;font-size:8px;padding: 10px;"></i>  <?php }  ?>
						<?php if($row['vale4']==1){?>  <i class="icon-pigpent" style="color: #A4CA2A;font-size:8px;padding: 10px;"></i>  <?php }  ?>
						<?php if($row['vale4']==2){?> <i class="icon-pigpenu" style="color: #A4CA2A;font-size:8px;padding: 10px;"></i>  <?php }  ?>
					
<?php	echo $row['vale1']; ?></a>
</td>
					   
<td><a  href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><?php	echo $row['vale2']; ?> </a></td>
<td><a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><?php	echo $row['vale3']; ?> </a></td>			  
<td style="background-color: #ecf0f2;"> <a href="javascript:void(0)," onclick="getText<?php echo $row['id'];?>()"><span style="color: #2271D8;"><?php	echo $row['date']; ?></span>  / <?php	echo $row['time']; ?> / <span style="color: #A4CA2A;"><?php	echo $row['laststate']; ?></span> </a></td>
					
				
					
  				  



			  
<script type="text/javascript">
function getText<?php echo $row['id'];?>(el){
document.myForm.edit.disabled = false;
	document.myForm.clinss.disabled = false;
	$('#mode').val('<?php	echo $row['mode']; ?>').change();
	$('#mode').val('<?php	echo $row['mode']; ?>').change();
	document.getElementById('id').value = '<?php	echo $row['id']; ?>';
	document.getElementById('rowtypen').value = '<?php	echo $rowtypen; ?>';
	document.getElementById('name').value = '<?php	echo $row['name']; ?>';
	document.getElementById('address').value = '<?php	echo $row['address']; ?>';
	document.getElementById('vale1').value = '<?php	echo $row['vale1']; ?>';
	document.getElementById('vale2').value = '<?php	echo $row['vale2']; ?>';
	document.getElementById('vale3').value = '<?php	echo $row['vale3']; ?>';
	document.getElementById("radio<?php	echo $row['vale4']; ?>").checked = true; 
	

}

function clin(){
	document.myForm.edit.disabled = true;
	document.myForm.clinss.disabled = true;
	$('#mode').val('').change();
	$('#mode').val('').change();
	document.getElementById('id').value = '';
	document.getElementById('rowtypen').value = '';
	document.getElementById('name').value = '';
	document.getElementById('address').value = '';
	document.getElementById('vale1').value = '';
	document.getElementById('vale2').value = '';
	document.getElementById('vale3').value = '';
	document.getElementById("radio0").checked = true; 

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
		
		
		
<?php
if (isset($_POST['del'])) {$box_array = $_REQUEST['box']; foreach($box_array as $key => $value) {  mysqli_query($con,"DELETE FROM commands WHERE id='$value'");    echo  "Удалена запиь: ".$value." / "; }  echo "<SCRIPT> window.location.reload();</SCRIPT>"; }



if (isset($_POST['save'])) {

 $name = $_POST['name'];
 $mode = $_POST['mode'];
 $address = $_POST['address'];
 $vale1 = $_POST['vale1'];
 $vale2 = $_POST['vale2'];
 $vale3 = $_POST['vale3'];
 $vale4 = $_POST['vale4'];
 $rowtypen = $_POST['rowtypen'];
 
 if($rowtypen == '1') {  $vale2='';  $vale3=''; };
 if($rowtypen == '2') {  $vale3=''; $vale4=''; };
 if($rowtypen == '3') {  $vale4=''; };
 if($rowtypen == '4') {  $vale1=''; $vale2='';  $vale3=''; $vale4=''; };
 
mysqli_query($con,"INSERT INTO commands (name, mode, address, vale1, vale2, vale3, vale4) VALUES ('$name','$mode', '$address', '$vale1', '$vale2', '$vale3', '$vale4')");
echo "Запись добавлена";
echo "<SCRIPT> window.location.reload();</SCRIPT>";
}



if (isset($_POST['refres'])) { echo "<SCRIPT> window.location.reload();</SCRIPT>";}


if (isset($_POST['edit'])) {
 $id = $_POST['id'];
 $name = $_POST['name'];
 $mode = $_POST['mode'];
 $address = $_POST['address'];
 $vale1 = $_POST['vale1'];
 $vale2 = $_POST['vale2'];
 $vale3 = $_POST['vale3'];
 $vale4 = $_POST['vale4'];
 $rowtypen = $_POST['rowtypen'];
 
 if($rowtypen == '1') {  $vale2='';  $vale3=''; };
 if($rowtypen == '2') {  $vale3=''; $vale4=''; };
 if($rowtypen == '3') {  $vale4=''; };
 if($rowtypen == '4') {  $vale1=''; $vale2='';  $vale3=''; $vale4=''; };
 
 
mysqli_query($con,"UPDATE commands SET name='$name',mode ='$mode',address ='$address',vale1 ='$vale1' ,vale2 ='$vale2' ,vale3 ='$vale3' ,vale4 ='$vale4'  WHERE id = '$id'");
echo "Запись изменена";echo "<SCRIPT> window.location.reload();</SCRIPT>";
}

?>
		
	
<div class="clearfix"></div>
 </div>
</div>
</div>
<?php	 include 's-rpanel.php'; ?>
<script type="text/javascript">	$('#mode').val('<?php echo $_GET['mode']; ?>').change();</script>
</body>
</html>
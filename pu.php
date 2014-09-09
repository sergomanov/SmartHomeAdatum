<!DOCTYPE html>
<html>
<head>

<?php	
 include 'autt.php';
 include 's-head.php';
 include 's-libmon.php'; 

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
<link href="css/ios7-switch.modernizr.css" rel="stylesheet" type="text/css"/>

<link href="assets/css/tiles_responsive.css" rel="stylesheet" type="text/css"/>




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



<script src="assets/plugins/skycons/skycons.js"></script>
<script src="assets/js/widgets.js" type="text/javascript"></script>



 <link rel="stylesheet" href="css/styleresp.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

			

			
			
			
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

		<p class="menu-title"><i class="icon-home" style="font-size: 25px;"></i>	Панель управления</p>		
	 </div>
	<ul class="small-items">

  <li    <?php if($imyaStranici=='pu.php'){echo "class='active'";}?>><a href="pu.php"><i class="icon-windows"></i> Каталог </a></li>
  
  
  
	    <?php


$resmen = mysqli_query($con,"SELECT * FROM `scheduler` WHERE type = '10'"); 
if($resmen){ 	while($rowmen = mysqli_fetch_assoc($resmen)){

?>
  <li><a href="map.php?map=<?php echo $rowmen['id']; ?>"><i class=" icon-placealt"></i>  <?php echo $rowmen['name']; ?></a></li>
<?php
}}
?> 
	</ul>
   </div> 
   
   
 </div>
  <a href="#" class="scrollup">Scroll</a>

  <div class="page-content"> 
    <div class="clearfix"></div>
  
	 
	 		
	
 
  <FORM NAME=s METHOD=post ACTION="javascript:window.alert('Данные отправленны');void(0);">
  <div class="content">

 
  
  
  <div class="wrap"><div id="grid"><div id="sort" class="masoned" style="position: relative; height: 1115px;">
		
  
  
    
	
	  <?php
	
	    $dir = $_GET['dir'];
	//	$res = mysqli_query($con,"SELECT * FROM `scheduler` WHERE type=9 OR type=3");
	
	
 if($dir){  $res = mysqli_query($con,"SELECT * FROM `scheduler` WHERE CONCAT(',', dir, ',') LIKE '%,$dir,%' AND  type=3");	}
else{		 $res = mysqli_query($con,"SELECT * FROM `scheduler` WHERE type=9");	}
	
	
	
	
	
		if($res) {   while($row = mysqli_fetch_assoc($res)){ 
	 	?>
		



	   
	   
<?php  if($row['dir']){	?>		  <a onclick="$.ajax({type: 'POST',url: 's-response.php',data: 'value=<?php	echo $row['commands']; ?>',success: function(data){$('.results').html(data);}});">	<?php  }	?>
<?php  if($row['dir']==NULL)	   {	?>		<a href="<?php echo $imyaStranici?>?dir=<?php	echo $row['id']; ?>"> 				<?php  }	?>


		<div  class="box" style="position: absolute; left: 1400px; top: 0px; margin: 10px;   ">
			
			 <div class="tiles green  overflow-hidden full-height" style="max-height:130px">
                    <div class="overlayer bottom-right fullwidth"><div class="overlayer-wrapper"><div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20"><div class="pull-right"> <div class="hashtags transparent"><?php	echo $row['name']; ?></div> </div><div class="clearfix"></div></div></div></div>
 <script> setInterval(function(){$("#erdfg<?php	echo $row['id']; ?>").load("<?php   echo basename($_SERVER['PHP_SELF']);?>?dir=<?php	echo $dir; ?> #erdfg<?php	echo $row['id']; ?>"); }, 1000); </script>
 
 <div id="erdfg<?php	echo $row['id']; ?>">
 <?php $conditions = $row['conditions'];
 $result2= mysqli_query($con, "SELECT * FROM `commands` WHERE id ='$conditions'"); 
 $row2=mysqli_fetch_array($result2); 
 $reschecked = $row2['laststate'];
 if($reschecked){echo "<img src='".$row['imgon']."' class='lazy hover-effect-img image-responsive-width'>";} 
 else {echo "<img src='".$row['img']."' class='lazy hover-effect-img image-responsive-width'>";}	?>
  </div>
			
			<img src="<?php	echo $row['img']; ?>" alt="" class='lazy hover-effect-img image-responsive-width'>
			</div>		
		
				<div  class="tiles white ">
                <div class="tiles-body">
                   
		<?php   if($row['conditions']){ ?>
                <div class="user-profile-pic text-left"> 
					 
					  <script> setInterval(function(){$("#izm<?php	echo $row['id']; ?>").load("<?php   echo basename($_SERVER['PHP_SELF']);?>?dir=<?php	echo $dir; ?> #izm<?php	echo $row['id']; ?>"); }, 1000); </script>			  


		   

			</div>
			<?php } ?>
                 </div> </a>
			

								<div id="izm<?php	echo $row['id']; ?>">	
								<?php   if($row['conditions']){ ?>
<?php $conditions = $row['conditions'];$result2= mysqli_query($con, "SELECT * FROM `commands` WHERE id ='$conditions'"); $row2=mysqli_fetch_array($result2); $reschecked = $row2['laststate'];if($reschecked){echo "<div class='description' style='font-size: 11px;'><span class='mini-description text-info'>&nbsp; Включено : ";echo  parse_timestamp($timereal-$row2['unixtime']); echo "</span></div>";} else {echo "<div class='description muted ' style='font-size: 11px;'><span class='mini-description'>&nbsp; Выключено : ";echo  parse_timestamp($timereal-$row2['unixtime']); echo "</span></div>";}	?>
      	<?php } ?>
						
								<?php	
								$drivers = $row['drivers'];			
								$mode = $row['mode'];	
								$res4 = mysqli_query($con,"SELECT * FROM `namedev` WHERE id IN ($drivers)"); if($res4) {   while($row4 = mysqli_fetch_assoc($res4)){$address4 = $row4['address'];$name4 = $row4['name'];echo "<div href='#' class='hashtags2 m-b-5'>"; echo $name4."</div>";
								$res5 = mysqli_query($con,"SELECT * FROM `type` WHERE id IN ($mode)"); if($res5) {   while($row5 = mysqli_fetch_assoc($res5)){$mode5=$row5['mode'];$name5=$row5['name'];$ico5=$row5['ico'];$symbol5=$row5['symbol'];
								$res6 = mysqli_query($con,"SELECT * FROM `developments` WHERE mode ='$mode5' AND address='$address4' ORDER BY id DESC LIMIT 1");
								if($res6) {   while($row6 = mysqli_fetch_assoc($res6)){
								 ?>
								<div class="description" style="font-size: 11px;"><i class="<?php	echo $ico5; ?>"></i><span class="mini-description ">&nbsp; <?php	echo $row6['vale1']; ?> <?php	echo $symbol5; ?> <?php	echo $name5; ?></span></div>
								<?php	}}}}}}   ?>
								</div>

                  </div>

        </div>
			

 
	
	
		  <?php
}
mysqli_free_result($res);
}
	 	?>
		 
    
 </div></div></div>



   
	
 
  </div>
  
  	
		
   </form>	

	

 <div class="clearfix"></div>
  </div>

</div>

 </div>
 
<?php	
 include 's-rpanel.php'; 
?>



</body>
</html>
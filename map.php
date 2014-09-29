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

<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.flot.time.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.flot.selection.js"></script>

  


<script src="assets/js/widgets.js" type="text/javascript"></script>



 <link rel="stylesheet" href="css/styleresp.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

			

			
			
			
</head>

<body class="inner-menu-always-open" >

<?php	 include 's-tophead.php'; ?>
<?php	 include 'adatum.class.php' ; ?>

<div class="page-container row-fluid"> 
<div class="page-sidebar mini mini-mobile" id="main-menu" data-inner-menu="1">
 
  <?php	 include 's-slidebar.php'; ?>

   <div class="inner-menu nav-collapse">   


<div class="inner-wrapper" ><p class="menu-title"><i class="icon-home" style="font-size: 25px;"></i>	Панель управления</p></div>

<ul class="small-items">

  <li    <?php if($imyaStranici=='pu.php'){echo "class='active'";}?>><a href="pu.php"><i class="icon-windows"></i> Каталог </a></li>
  
  
  
  
   <?php
$timedat= mysqli_query($con, "SELECT * FROM data WHERE id='22'"); $rowtimedat=mysqli_fetch_array($timedat); $timedatact = $rowtimedat['state'];   
   
if(isset($_GET['map'])) {	$maps=$_GET['map']; }
if(isset($_GET['mode'])) {	$modes=$_GET['mode']; }
if(isset($_GET['address'])) {	$addresss=$_GET['address']; }

$modedat= mysqli_query($con, "SELECT * FROM type WHERE mode='$modes'"); $moderow=mysqli_fetch_array($modedat); $moderows = $moderow['name'];  $icorows = $moderow['ico']; $colorrows = $moderow['color']; $symbolrows = $moderow['symbol'];

$addressdat= mysqli_query($con, "SELECT * FROM namedev WHERE address='$addresss'"); $rowaddressdat=mysqli_fetch_array($addressdat); $rowaddressdats = $rowaddressdat['name'];  

if(isset($_GET['edit'])){$edit=0;} else {$edit=1;}

$resmen = mysqli_query($con,"SELECT * FROM `scheduler` WHERE type = '10'"); 
if($resmen){ 	while($rowmen = mysqli_fetch_assoc($resmen)){

?>
  <li    <?php if($maps==$rowmen['id']){echo "class='active'";}?>><a href="map.php?map=<?php echo $rowmen['id']; ?>"><i class=" icon-placealt"></i>  <?php echo $rowmen['name']; ?></a></li>
<?php
}}
?>


	  
	</ul>
   </div> 
   
   

       

                 
            
   
 </div>
  <a href="#" class="scrollup">Scroll</a>

  <div class="page-content" style="background: #ffffff;" > 
   <div  class="content" style="background-color: #ffffff;">

 
  
   

   <div  style="<?php if(!isset($_GET['mode'])) {	echo "display: none;"; } ?> ;">
    <?php 
	
$typechartp= mysqli_query($con, "SELECT * FROM type WHERE mode='$modes'"); $typechart=mysqli_fetch_array($typechartp); $typecharts = $typechart['tchart'];  
	
	
	
	?>


		
					
							
							
	
	
	
	
	
	
	
	
<a href="map.php?map=<?php echo $maps;?>" style=" position: absolute;  top: 55px;  left: 20px; color:<?php	echo $colorrows; ?>;"><i class="<?php	echo $icorows; ?>"></i> <?php echo $rowaddressdats." [".$addresss."] - "."Датчик ".$moderows." [".$modes."]"."                 [ Свернуть &#9650; ]";  ?> </a>
	
   	<script type="text/javascript">

	
	
	
	 
$.fn.UseTooltip = function () {
    var previousPoint = null;
     
    $(this).bind("plothover", function (event, pos, item) {         
        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;
 
                $("#tooltip").remove();
                 
                var x = item.datapoint[0];
                var y = item.datapoint[1];                
                 
                showTooltip(item.pageX, item.pageY,
                 "<div  style='color:<?php	echo $colorrows; ?>;'><i class='<?php	echo $icorows; ?>'></i> "+"<?php echo $moderows; ?>" + " <strong>" + y.toFixed(0) + " <?php echo $symbolrows; ?>" + "</strong></div>");
            }
        }
        else {
            $("#tooltip").remove();
            previousPoint = null;
        }
    });
};
 
function showTooltip(x, y, contents) {
    $('<div id="tooltip">' + contents + '</div>').css({
        position: 'absolute',
        display: 'none',
        top: y + 5,
        left: x + 20,
    }).appendTo("body").fadeIn(200);
}
	
	
	
	$(function() {

		var d = [

		
				   <?php
$per=0;
$res9 = mysqli_query($con,"SELECT * FROM `developments` WHERE mode = '$modes' AND address = '$addresss'"); 
if($res9){ 	while($row9 = mysqli_fetch_assoc($res9)){


$utime7=$row9['unixtime'];



$vale79=$row9['vale1'];

if($per==0){$per=$vale79;}
else {$per=$per*0.95+$vale79*0.05;}

$utime7=$utime7."000";
echo "[".$utime7.",".$per."],";

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
<?php if($typecharts==0) {	echo "series: {lines: {show: true}  },"; } ?>
<?php if($typecharts==1) {	echo "bars: {show: true, align: 'center', barWidth: 0.2,},"; } ?>

			xaxis: {
			
				mode: "time",
				tickLength: 5
			},

	legend: {
				
				show: true
			},
			yaxis: {
		
		
			},
			grid:   {markings: weekendAreas, backgroundColor: { colors: [ "#fff", "#fff" ] },borderWidth:1,borderColor:"#f0f0f0",margin:0,minBorderMargin:0, labelMargin:20,hoverable: true, mouseActiveRadius: 10, clickable: true}
	
		};

		var plot = $.plot("#placeholders", [d], options);
		
    $("#placeholders").UseTooltip();

	});
	
	</script>

	<div id="placeholders" class="demo-placeholder"  style="width: 100%;height: 200px;"></div>
         
	</div>	





		<div  style="position:relative; background-color: #ffffff;">	

 
 
 <?php


//echo $edit;
$res5 = mysqli_query($con,"SELECT * FROM `scheduler` WHERE id = '$maps'"); 
if($res5){ 	while($row5 = mysqli_fetch_assoc($res5)){
$img5=$row5['img'];
$drivers5=$row5['drivers'];
$mode5=$row5['mode'];
}}
?>






  
  
<?php
$res6 = mysqli_query($con,"SELECT * FROM `namedev` WHERE id IN ($drivers5)"); 
if($res6) 	{   	while($row6 = mysqli_fetch_assoc($res6))	{
$address6=$row6['address'];
$name6=$row6['name'];
$res8 = mysqli_query($con,"SELECT * FROM `type` WHERE id IN ($mode5)"); 
if($res8){ 	while($row8 = mysqli_fetch_assoc($res8))	{
$mode8=$row8['mode'];
$tchart8=$row8['tchart'];
$ico8=$row8['ico'];
$color8=$row8['color'];
$symbol8=$row8['symbol'];
$name8=$row8['name'];
?>

 <?php if($edit){?>
 <script> setInterval(function(){$("#mododat<?php	echo $address6.$mode8.$maps; ?>").load("<?php   echo basename($_SERVER['PHP_SELF']);?>?map=<?php	echo $maps; ?> #mododat<?php	echo $address6.$mode8.$maps; ?>"); }, 1000); </script>
 <?php } ?>
 
 <div id="mododat<?php	echo $address6.$mode8.$maps; ?>">
<?php
$res7 = mysqli_query($con,"SELECT * FROM `developments` WHERE address = '$address6' AND mode ='$mode8'  ORDER BY id DESC LIMIT 1"); 
if($res7) 	{   	while($row7 = mysqli_fetch_assoc($res7))	{
$vale7=$row7['vale1'];
$unixtime7=$row7['unixtime'];

  $polles444="top".$row6['address'].$mode8.$maps;
  $result444= mysqli_query($con, "SELECT * FROM `coordinates` WHERE idn = '$polles444'"); 
 $row444=mysqli_fetch_array($result444);
  //echo $row444['coor']."<br>";
  
  
    $polles555="left".$row6['address'].$mode8.$maps;
  $result555= mysqli_query($con, "SELECT * FROM `coordinates` WHERE idn = '$polles555'"); 
 $row555=mysqli_fetch_array($result555);
  //echo $row555['coor']."<br>";
?>
  <a href="map.php?map=<?php echo $maps;?>&mode=<?php echo $mode8;?>&address=<?php echo $address6;?>" >

<div class="draggable"  id="dragl<?php echo $row6['address']; ?><?php echo $mode8.$maps; ?>" style="  position: absolute;  top: <?php echo $row444['coor']; ?>px;  left: <?php echo $row555['coor']; ?>px; color: <?php echo $color8; ?>;">
 <?php  if($timereal - $timedatact > $unixtime7){echo "<span class='badgem3'>X</span>";}  ?>
 
 
 
 
 <?php if($tchart8==1&&($timereal-$unixtime7<15)) {
 if ((($timereal-$unixtime7) % 2) == 0){
 ?>
  <i class="<?php echo $ico8; ?>  <?php  if($timereal -  $timedatact > $unixtime7){echo "ico-opacity";}  ?>" style="font-size: 20px; <?php   if(isset($_GET['edit'])){ echo "border: 1px solid red;";} ?>"></i>
 <?php
}
else {
 ?>
  <i class=" <?php echo $ico8; ?>  <?php  if($timereal -  $timedatact > $unixtime7){echo "ico-opacity";}  ?>" style="font-size: 20px; color: #FA2841;<?php   if(isset($_GET['edit'])){ echo "border: 1px solid red;";} ?>"></i>
 <?php
}

 ?>

 <?php } else {?>
 <i class="<?php echo $ico8; ?>  <?php  if($timereal -  $timedatact > $unixtime7){echo "ico-opacity";}  ?>" style="font-size: 20px; <?php   if(isset($_GET['edit'])){ echo "border: 1px solid red;";} ?>"></i>
  <?php }?>
 
 

<?php if($tchart8==0) {	echo "<div style='margin:-3px;'>".$vale7.$symbol8."</div>"; } ?>
<?php if($tchart8==1) {	echo "<div style='margin:-3px;'>".parse_timestamp($timereal-$unixtime7)."</div>"; } ?>


 
 <?php   if(isset($_GET['edit'])){  ?>
 <input TYPE=hidden value=''   size='25' name="name" id='top<?php echo $row6['address']; ?><?php echo $mode8.$maps; ?>' style="background-color: transparent;font-size: 8px;min-height: 16px;"/><br>
 <input TYPE=hidden value=''  size='25' name="name" id='left<?php echo $row6['address']; ?><?php echo $mode8.$maps; ?>' style="background-color: transparent;font-size: 8px;min-height: 16px;"/>
 
 <?php  }  ?>
 
 </div>
 </a>
 

 <?php   if(isset($_GET['edit'])){  ?>
 
<script>
  $(function() {
    $( "#dragl<?php echo $row6['address']; ?><?php echo $mode8.$maps; ?>" ).draggable({
     

    scroll: false,
    drag: function(event, ui) {
    document.getElementById('top<?php echo $row6['address']; ?><?php echo $mode8.$maps; ?>').value =  'top<?php echo $row6['address']; ?><?php echo $mode8.$maps; ?>-' + ui.position.top  ;
    document.getElementById('left<?php echo $row6['address']; ?><?php echo $mode8.$maps; ?>').value =  'left<?php echo $row6['address']; ?><?php echo $mode8.$maps; ?>-' + ui.position.left  ;
    }
 
    });
  }
 
  );
  </script>
 <?php  }  ?>
 
<?php }}?>
</div>

 <?php

}}}} ?>
  
 

  
  
  
   <?php
$res9 = mysqli_query($con,"SELECT * FROM `scheduler` WHERE dir = '$maps'"); 
if($res9){ 	while($row9 = mysqli_fetch_assoc($res9)){
$img9=$row9['img'];
$drivers9=$row9['drivers'];
$mode9=$row9['mode'];
$name9=$row9['name'];
$conditions9=$row9['conditions'];

$commands9=$row9['commands'];
//echo $conditions9;
?>

 <?php if($edit){?>
 <script> setInterval(function(){$("#erdfg<?php	echo $row9['id']; ?>").load("<?php   echo basename($_SERVER['PHP_SELF']);?>?map=<?php	echo $maps; ?> #erdfg<?php	echo $row9['id']; ?>"); }, 1000); </script>
 <?php } ?>
 
 
 <div id="erdfg<?php	echo $row9['id']; ?>">
 <?php 
 $result2= mysqli_query($con, "SELECT * FROM `commands` WHERE id ='$conditions9'"); 
 $row2=mysqli_fetch_array($result2); 
 $reschecked = $row2['laststate'];
  $address2 = $row2['address'];
  $unixtimecommands = $row2['unixtime'];
// echo $reschecked;
 if($reschecked==0){$img99 = $row9['imgon'];} 
  else {$img99 = $row9['img'];}	
  
  $polles="top".$row9['id'].$address2;
  $result222= mysqli_query($con, "SELECT * FROM `coordinates` WHERE idn = '$polles'"); 
 $row222=mysqli_fetch_array($result222);
 // echo $row222['coor']."<br>";
  
  
    $polles333="left".$row9['id'].$address2;
  $result333= mysqli_query($con, "SELECT * FROM `coordinates` WHERE idn = '$polles333'"); 
 $row333=mysqli_fetch_array($result333);
 // echo $row333['coor']."<br>";

 ?>
 
 <?php if($edit=='1'){?> <a style = 'cursor: pointer;' onclick="$.ajax({type: 'POST',url: 's-response.php',data: 'value=<?php	echo $commands9; ?>',success: function(data){$('.results').html(data);}});"> <?php } ?>
 <div class="draggable tip" id="dragl<?php echo $row9['id'].$address2; ?>" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="<?php echo $name9; ?>" style="  position: absolute;  top: <?php echo $row222['coor']; ?>px;  left: <?php echo $row333['coor']; ?>px;">

 <img src="<?php echo $img99; ?>" width="55" alt="lorem" style=" <?php   if(isset($_GET['edit'])){ echo "border: 1px solid red;";} ?>"><div style="margin:-3px;"><?php   echo  parse_timestamp($timereal-$unixtimecommands);?></div>
 <?php   if(isset($_GET['edit'])){  ?> 
 <input TYPE=hidden value=''  size='20' name="name" id='top<?php echo $row9['id'].$address2; ?>' style="background-color: transparent;font-size: 8px;min-height: 16px;"/><br>
 <input TYPE=hidden value=''  size='20' name="name" id='left<?php echo $row9['id'].$address2; ?>' style="background-color: transparent ;font-size: 8px; min-height: 16px; "/>
<?php  }  ?>

 </div>
 <?php if($edit=='1'){?> </a><?php } ?>
   <?php   if(isset($_GET['edit'])){  ?>
 
<script>
  $(function() {
    $( "#dragl<?php echo $row9['id'].$address2; ?>" ).draggable({
     

    scroll: false,
         drag: function(event, ui) {
      document.getElementById('top<?php echo $row9['id'].$address2; ?>').value =  'top<?php echo $row9['id'].$address2; ?>-' + ui.position.top  ;
     document.getElementById('left<?php echo $row9['id'].$address2; ?>').value =  'left<?php echo $row9['id'].$address2; ?>-' + ui.position.left  ;
    }
 
    });
  }
 
  );
  </script>
 <?php  }  ?>
	
  </div>






  <?php
}}
?>

  

 <?php 
  if(isset($_GET['edit']))
{
  ?>
  <a href="map.php?map=<?php echo $maps;?>" onclick="send();" style="  position: absolute;  top: 55px;  left: 20px;"><i class="icon-windows"></i> Закончить редактирование </a>	

 <?php 
} else {
  ?>	
<a href="map.php?map=<?php echo $maps;?>&edit=1" style="  position: absolute;  top: 55px;  left: 20px;"><i class="icon-windows"></i> Редактировать </a>
	 <?php 
} 
  ?>
	
<img src="<?php echo $img5; ?>"  alt="lorem" >




<div id="result"></div>




</div>	
	








<script>
function send()
{
values = $("input[name=name]").map(function(){return $(this).val();}).get();
var data = $("input[name=name]").map(function(){return $(this).val();}).get();
       $.ajax({
                type: "POST",
                url: "SendData.php",
                data: "data="+data,
                success: function(html) {
                        $("#result").empty();
                        $("#result").append(html);
                }
        });
}

</script>


 <div class="clearfix"></div>

  </div>

</div>
 </div>
 </div>
 
<?php	
 include 's-rpanel.php'; 
?>



</body>


</html>
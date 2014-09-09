<!-- BEGIN CHAT --> 
<div id="sidr" class="chat-window-wrapper">
	<div id="main-chat-wrapper" >
	<div class="chat-window-wrapper fadeIn" id="chat-users" >
		<div class="chat-header">	
		
		</div>	
		<div class="side-widget">
		   <div class="side-widget-title">Комманды</div>
		    <div class="side-widget-content">
			 <div id="groups-list">
				<ul class="groups" >
	
			 <script> setInterval(function(){$("#block2").load("<?php   echo basename($_SERVER['PHP_SELF']);?> #block2"); }, 1000); </script>		
				
	


	 <div id="block2">
	<?php 
	$res2 = mysqli_query($con,"SELECT * FROM `developments` order by `id` desc limit 20");
					if($res2) 
					{
					   while($row = mysqli_fetch_assoc($res2)) 
							 {

$commands_run=$row['mode'].",".$row['address'].",".$row['vale1'].",".$row['vale2'].",".$row['vale3'].",".$row['vale4'].",".$row['mode']."\n\r";
$mode_run= $row['mode'];
$address_run=$row['address'];
$vale1_run=$row['vale1'];
$vale2_run= $row['vale2'];


?>

	<div class="status-widget">
			<div class="status-widget-wrapper">
				<div onclick="getText<?php echo $row['id'];?>()" class="title"  >



<?php $rowmode = $row['mode']; $resico = mysqli_query($con,"SELECT * FROM `type` WHERE mode ='$rowmode'");if($resico){while($rowico = mysqli_fetch_assoc($resico)){$rowicon=$rowico['ico']; ?>
<i class="<?php echo $rowicon; ?> text-success "></i> <?php }}  ?>






				<?php echo $row['mode'];echo ",";echo $row['address'];echo ",";echo $row['vale1'];echo ",";echo $row['vale2'];echo ",";echo $row['vale3'];echo ",";echo $row['vale4'];echo ",";echo $row['mode'];?></div>
			
			
		<?php if($imyaStranici=='commands.php'){?>	
			<script type="text/javascript">
function getText<?php echo $row['id'];?>(el){

	$('#mode').val('<?php	echo $row['mode']; ?>').change();
	document.getElementById('id').value = '<?php	echo $row['id']; ?>';
	document.getElementById('rowtypen').value = '<?php	echo $rowtypen; ?>';
	document.getElementById('address').value = '<?php	echo $row['address']; ?>';
	document.getElementById('vale1').value = '<?php	echo $row['vale1']; ?>';
	document.getElementById('vale2').value = '<?php	echo $row['vale2']; ?>';
	document.getElementById('vale3').value = '<?php	echo $row['vale3']; ?>';
	document.getElementById("radio<?php	echo $row['vale4']; ?>").checked = true; 
	

}


	</script>
		<?php }?>		
			
			
			
			
			
			
			
			</div>
		</div>


<?php 
}}	?>
</div>
	<div  style="color:#C9D821; padding-left: 20px; font-size: 9px;"  >
	<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo 'Страница загружена за '.$total_time.' секунд.'."\n";
?>
</div>
				</ul>
			</div>
			</div>
		</div>
		
	
	</div>


	<div class="clearfix"></div>
	</div>
</div>

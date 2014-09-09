<?php
		$result= mysqli_query($con, "SELECT * FROM data WHERE id='4'");
		$row=mysqli_fetch_array($result);	if($row){$timezone = $row['state'];}
?>



<div class="header navbar navbar-inverse "> 
  <div class="navbar-inner">
	
	<div class="pull-left" > 
	  

	<script> setInterval(function(){$("#blocksystem").load("<?php   echo basename($_SERVER['PHP_SELF']);?> #blocksystem"); }, 1000); </script>
	<script> setInterval(function(){$("#blockeml").load("<?php   echo basename($_SERVER['PHP_SELF']);?> #blockeml"); }, 1000); </script>
		 	<script> setInterval(function(){$("#blocksms").load("<?php   echo basename($_SERVER['PHP_SELF']);?> #blocksms"); }, 1000); </script> 
				<script> setInterval(function(){$("#blockmain").load("<?php   echo basename($_SERVER['PHP_SELF']);?> #blockmain"); }, 1000); </script> 
		  



   <ul class="nav quick-section">

			 <li class="quicklinks"> <i style="font-size: 14px;  margin-top: 4px; color: #4DD847;">Adatum+</i></li>
			 
          <li class="quicklinks"> <span class="h-seperate"></span></li>
		  
		  
		  	  	<li data-toggle="tooltip" data-placement="bottom" data-original-title="Модуль приемо-передачи" class="tip"> <a href="" style=" margin: -7px; color: #0aa699 !important;"> <i class="icon-cgicenter" style="font-size: 20px;"></i> </a>
		<div id="blocksystem">
			<?php
		$result= mysqli_query($con, "SELECT * FROM data WHERE id='3'"); $row=mysqli_fetch_array($result);
			if($row['state'] < time()+$timezone-1){echo '<span class="badgem" id="msgs-badge">X</span>';}
		 ?>
		 </div>
		</li>
		  
		  
		  	<li data-toggle="tooltip" data-placement="bottom" data-original-title="Модуль RS-485" class="tip"> <a href="" style=" margin: -7px; color: #0aa699 !important;"> <i class="icon-usbflash" style="font-size: 20px;"></i> </a>
		<div id="blockmain">
			<?php
		$result= mysqli_query($con, "SELECT * FROM data WHERE id='12'"); $row=mysqli_fetch_array($result);
			if($row['state'] < time()+$timezone-1){echo '<span class="badgem" id="msgs-badge">X</span>';}
		 ?>
		 </div>
		</li>
		
		
		  

		<li data-toggle="tooltip" data-placement="bottom" data-original-title="Модуль отправки СМС сообщений (уровеь сигнала в процентах)" class="tip"> <a href="" style=" margin: -7px; color: #0aa699 !important;">  <i class="icon-networksignalalt" style="font-size: 20px;"></i></a>
		<div id="blocksms">
	
	
	
			<?php
		$result= mysqli_query($con, "SELECT * FROM data WHERE id='13'"); $row=mysqli_fetch_array($result);
			if($row['state'] < time()+$timezone-1){echo '<span class="badgem" id="msgs-badge">X</span>';}else
			{
			 ?>
			 	<span class="badgem2 badge-info" id="msgs-badge">
			<?php	$resulttty= mysqli_query($con, "SELECT * FROM data WHERE id='15'"); $rowtty=mysqli_fetch_array($resulttty); echo $rowtty['state']; 	 ?>%
				</span>
		<?php	}
		 ?>
		 </div>
		</li>
		
		
			
		
			<li data-toggle="tooltip" data-placement="bottom" data-original-title="Модуль отправки почты" class="tip"> <a href="" style=" margin: -7px; color: #0aa699 !important;">  <i class="icon-emailforwarders" style="font-size: 20px;"></i></a>
			<div id="blockeml">	<?php
		$result= mysqli_query($con, "SELECT * FROM data WHERE id='14'"); $row=mysqli_fetch_array($result);
			if($row['state']+1 < time()+$timezone-1){echo '<span class="badgem" id="msgs-badge">X</span>';}
		 ?> </div>
			
			</li>
			 
	<li class="quicklinks"> <span class="h-seperate"></span></li> 
	  	<li data-toggle="tooltip" data-placement="bottom" data-original-title="Отправленные комманды" class="tip">
		 <div class="results header-hidden" style="font-size: 13px; margin: 2px; color: #0aa699 !important;"><?php echo $login_user; ?>...</div>
		 
		 </li>
	 
		  </ul>
	  </div>

      <div class="pull-right"> 

	  
		
	
 <script> setInterval(function(){$("#block1").load("<?php   echo basename($_SERVER['PHP_SELF']);?> #block1"); }, 1000); </script>



		 <ul class="nav quick-section ">
		 
		<li data-toggle="tooltip" data-placement="bottom" data-original-title="Последние принятые комманды" class="tip"> <a  class="chat-menu-toggle" href="#sidr"  style=" margin: -7px; color: #0aa699 !important;">

 <div id="block1" class="header-hidden">
					<?php 
					$res2 = mysqli_query($con,"SELECT * FROM `developments` order by `id` desc limit 1");
					if($res2){while($row = mysqli_fetch_assoc($res2)){$commands_run=$row['mode'].",".$row['address'].",".$row['vale1'].",".$row['vale2'].",".$row['vale3'].",".$row['vale4'].",".$row['mode']."\n\r";$mode_run= $row['mode'];$address_run=$row['address'];$vale1_run=$row['vale1'];$vale2_run= $row['vale2'];
					 ?>
		<?php $rowmode = $row['mode']; $resico = mysqli_query($con,"SELECT * FROM `type` WHERE mode ='$rowmode'");if($resico){while($rowico = mysqli_fetch_assoc($resico)){$rowicon=$rowico['ico']; ?>
<i class="<?php echo $rowicon; ?> text-success "></i> <?php }}  ?>
			   	   

				   <?php echo $row['mode'];echo ",";echo $row['address'];echo ",";echo $row['vale1'];echo ",";echo $row['vale2'];echo ",";echo $row['vale3'];echo ",";echo $row['vale4'];echo ",";echo $row['mode'];?>
				       <?php }}	?>	
				
	 </div>			


		 	</a></li>
			
			<li class="quicklinks"> <span class="h-seperate"></span></li> 
		

 <li data-toggle="tooltip" data-placement="bottom" data-original-title="Выйти из сестемы" class="tip">
 <a href="index.php?exit" style=" margin: -7px; color: #0aa699 !important;">  <i class="icon-exit" style="font-size: 20px;"></i>  	</a></li>
		</ul>
      </div>
 
  </div>
</div>

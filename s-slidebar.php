 

<div class="page-sidebar-wrapper" id="main-menu-wrappers">
      <ul>
    




		
		
		
		<li data-toggle="tooltip" data-placement="right" data-original-title="Панель управления" class="tip <?php if($imyaStranici=='pu.php'){echo "active2";}?>"> <a href="pu.php"> 	
	  <?php 	   if($_GET['dir'])	   {	echo "<i class='icon-arrow-left'></i>";	} else {echo "<i class='icon-home'></i>";} ?><span class="title"></span>	</a> </li>
	

	

        <li data-toggle="tooltip" data-placement="right" data-original-title="Мониторинг" class="tip <?php if($imyaStranici=='monitoring.php'){echo "active2";}?>"> <a href="monitoring.php"> 			 <i class="icon-monitor"></i> 					</a> </li>

  
  
  
  
   <?php if($rule2_user=='1'){  ?>
   <li data-toggle="tooltip" data-placement="right" data-original-title="Планеровщик" class="tip <?php if($imyaStranici=='scheduler.php'){echo "active2";}?>"> <a href="scheduler.php"> 	<i class="icon-alarmclock"></i> 	</a> </li>
  <?php } ?>
  
  

   <li data-toggle="tooltip" data-placement="right" data-original-title="Графики" class="tip <?php if($imyaStranici=='charts.php'){echo "active2";}?>"> <a href="charts.php">  <i class="icon-barchartalt"></i>  	</a></li>
	   <?php if($rule5_user=='1'){  ?>	
		<li data-toggle="tooltip" data-placement="right" data-original-title="Настройка панели управления" class="tip <?php if($imyaStranici=='editpu.php'){echo "active2";}?>"> <a href="editpu.php">   	<i class="icon-programok"></i>		</a></li>
	  <?php } ?>
        <li data-toggle="tooltip" data-placement="right" data-original-title="Настройки" class="tip <?php if($imyaStranici=='setting.php' OR $imyaStranici=='history.php' OR $imyaStranici=='loguser.php' OR $imyaStranici=='ico.php' OR $imyaStranici=='namedev.php' OR $imyaStranici=='type.php'OR $imyaStranici=='commands.php'OR $imyaStranici=='users.php'){echo "active2";}?>" > <a href="loguser.php">   <i class="icon-settingstwo-gearalt"></i>  </a></li>

		
	 
	 
	
	 
	 
      </ul>

	  
	
	<div class="clearfix"></div>

 </div>
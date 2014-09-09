   <div class="inner-menu nav-collapse">   


	<div class="inner-wrapper" >	  				
		<p class="menu-title">  <i class="icon-settingstwo-gearalt" style="font-size: 25px;"> </i>   Настройки</p>		
	 </div> 
	 <br>	
	<ul class="small-items">

   <?php if($rule1_user=='1'){  ?>		
   <li    <?php if($imyaStranici=='setting.php'){echo "class='active'";}?>><a href="setting.php"><i class="icon-windows"></i> Параметры  </a></li>
  <?php } ?>

	<li    <?php if($imyaStranici=='history.php'){echo "class='active'";}?>><a href="history.php"><i class="icon-bookthree"></i> Журнал датчиков </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM developments");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>



	<li    <?php if($imyaStranici=='loguser.php'){echo "class='active'";}?>><a href="loguser.php"> <i class="icon-leftborder"></i> Журнал операции </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM logs");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>

   <?php if($rule3_user=='1'){  ?>	
	<li    <?php if($imyaStranici=='type.php'){echo "class='active'";}?>><a href="type.php"> <i class="icon-ninegag"></i> Типы датчиков </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM type");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>	
 <?php } ?>

   <?php if($rule3_user=='1'){  ?>
	<li    <?php if($imyaStranici=='namedev.php'){echo "class='active'";}?>><a href="namedev.php"> <i class="icon-avengers"></i> Имена устройств </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM namedev");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>	
 <?php } ?>
   <?php if($rule3_user=='1'){  ?>
	<li    <?php if($imyaStranici=='commands.php'){echo "class='active'";}?>><a href="commands.php"> <i class=" icon-lightning"></i> Действия </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM commands");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>	
 <?php } ?>
   <?php if($rule4_user=='1'){  ?>
	<li    <?php if($imyaStranici=='users.php'){echo "class='active'";}?>><a href="users.php"> <i class="icon-groups-friends"></i> Пользователи и права доступа </a><span class=" badge badge-disable "><?php $result= mysqli_query($con, "SELECT COUNT(1) FROM users");$row=mysqli_fetch_array($result);echo $row[0];?></span></li>
 <?php } ?>


	</ul>
   </div>





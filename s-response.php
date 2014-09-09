<?php

 include 's-head.php';

 $result= mysqli_query($con, "SELECT * FROM data WHERE id='4'");
 $row=mysqli_fetch_array($result);	if($row){$timezone = $row['state'];}
 $timereal = time()+$timezone;

$commands_id3=$_POST['value'];
echo "Отправленные комманды: № ";
	$res4 = mysqli_query($con,"SELECT * FROM `commands` WHERE id IN ($commands_id3)");
			if($res4) {   while($row4 = mysqli_fetch_assoc($res4)) 
				   {
			    if($row4['vale1']){ $vale1=$row4['vale1'];}	   else	   {$vale1=0;}
				    if($row4['vale2']){ $vale2=$row4['vale2'];}	   else	   {$vale2=0;}
					if($row4['vale3']){ $vale3=$row4['vale3'];}	   else	   {$vale3=0;}
				    if($row4['vale4']){ $vale4=$row4['vale4'];}	   else	   {$vale4=0;}
				   
				  $commands_run=$row4['mode'].",".$row4['address'].",".$vale1.",".$vale2.",".$vale3.",".$vale4.",".$row4['mode']."\n\r";
				  $mode_run=$row4['mode'];	
				  $address_run=$row4['address'];	
				  $vale1_run=$row4['vale1'];	
				  $vale2_run=$row4['vale2'];	
				  echo $row4['id'].",";
				  mysqli_query($con,"INSERT INTO run (mode,vale,address,vale1,vale2,unixtime) VALUES ('$mode_run','$commands_run','$address_run','$vale1_run','$vale2_run','$timereal')");
					}	
				mysqli_free_result($res4); } 


?>
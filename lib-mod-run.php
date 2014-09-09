<?php
		echo "-> ".$date_today." ".$time_today." Received from the device: ".$read;
		mysqli_query($con,"INSERT INTO developments (mode, address, vale1, vale2, vale3, vale4, date, time,unixtime) VALUES ('$mode', '$address', '$vale1', '$vale2', '$vale3', '$vale4', '$date_today', '$time_today', '$timereal')");

		
			$result= mysqli_query($con, "SELECT * FROM commands WHERE vale1 like '%".$vale1."' AND vale2 like '%".$vale2."' AND mode like '%".$mode."' AND address like '%".$address."'"); 
			$row=mysqli_fetch_array($result); if($row['id']) 
			{
			$nev = $row['id']; echo "-> ".$date_today." ".$time_today." The signal was found in the database commands: id ".$nev."\n\r"; 
			mysqli_query($con,"UPDATE commands SET laststate='$vale3',date ='$date_today',time ='$time_today',unixtime ='$timereal' WHERE id = '$nev'");
			
			
			
					//планировщик
					$res2 = mysqli_query($con,"SELECT * FROM `scheduler` WHERE switch ='1' AND type ='4'");
					if($res2) 
					{
					   while($row2 = mysqli_fetch_assoc($res2)) 
							 {

							if (in_array($nev, explode(',',$row2['conditions']))!== false) 
								{			
									echo "-> ".$date_today." ".$time_today." Worked condition type 4 On signal.\n\r";
									$sch_id=$row2['id'];
									mysqli_query($con,"UPDATE scheduler SET timerun='$timereal',run ='1' WHERE id = '$sch_id'");
								}		
							}
					}
					//планировщик
		   }
		   
		   
		   
		   //Удаление отработтаных и подтверждённых записей
		    $res8 = mysqli_query($con,"SELECT * FROM `run` WHERE run ='1' AND mode='$vale4'");
			if($res8) {   while($row8 = mysqli_fetch_assoc($res8)) 
						 {
						 $del_command = $row8['id'];
						 mysqli_query($con,"DELETE FROM run WHERE id='$del_command'");
						 echo "-> ".$date_today." ".$time_today." Removal from the database of used commands.\n\r";
			 }}
			//Удаление отработтаных и подтверждённых записей
?>


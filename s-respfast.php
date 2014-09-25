<?php

 include 's-head.php';

 $result= mysqli_query($con, "SELECT * FROM data WHERE id='4'");
 $row=mysqli_fetch_array($result);	if($row){$timezone = $row['state'];}
 $timereal = time()+$timezone;

$commands_id3=$_POST['value'];
echo "Отправленные комманды: ";
echo $commands_id3;

$comm = explode(',', $commands_id3);
mysqli_query($con,"INSERT INTO run (mode,vale,address,vale1,vale2,unixtime) VALUES ('$comm[0]','$commands_id3','$comm[1]','$comm[2]','$comm[3]','$comm[4]')");
			


?>
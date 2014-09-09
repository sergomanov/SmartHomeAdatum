<?php
 include 's-head.php';

$data = $_POST[data];


$arr = explode(',',$data);
foreach($arr as $item) {


$arra = explode('-',$item);
echo $arra[0];
echo $arra[1];
$pol = $arra[0];
$cor = $arra[1];

 $result12= mysqli_query($con, "SELECT * FROM `coordinates` WHERE idn = '$pol'"); 
 $row12=mysqli_fetch_array($result12);
 if($row12['id'])
 {
mysqli_query($con,"UPDATE coordinates SET coor='$cor' WHERE idn = '$pol'");
 }
 else
 {
 mysqli_query($con,"INSERT INTO coordinates (coor, idn) VALUES ('$cor','$pol')");
 }


}


?>
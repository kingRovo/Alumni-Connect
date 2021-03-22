<?php
include_once 'dbh.inc.php';
$sql="SELECT * FROM userinfo ";
$data=mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
echo $total;;

?>

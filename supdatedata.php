<?php
 $dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
mysql_select_db($dbname);
$sql = "UPDATE students SET name='$_POST[uname]',email= '$_POST[uemail]',pass='$_POST[pass]',branch='$_POST[brn]',un_name='$_POST[un]',joining='$_POST[jy]',pics='$_POST[pic]' where st_id='$_POST[id]'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=supdate.php");
else
{
	echo "not update";
}
?> 
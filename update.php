<?php
 $dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
mysql_select_db($dbname);
$sql = "UPDATE userinfo SET name='$_POST[uname]',email= '$_POST[uemail]',pass='$_POST[pass]',branch='$_POST[brn]',uname='$_POST[un]',p_year='$_POST[py]',com_name='$_POST[cname]',pics='$_POST[pic]' where id='$_POST[id]'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=display.php");
else
{
	echo "not update";
}
?> 
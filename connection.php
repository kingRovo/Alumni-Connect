<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbdbname="login";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con)
{echo "connection okk";}
else
{
	echo "not okk";
}


?>
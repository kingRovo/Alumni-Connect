<?php
 $dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
mysql_select_db($dbname);
$sql = "UPDATE event SET ev_name='$_POST[en]',ev_type= '$_POST[et]',Venue='$_POST[ev]',ev_date='$_POST[ed]',time='$_POST[etime]',pics='$_POST[pic]' where ev_id='$_POST[id]'";
if(mysqli_query($con,$sql))
    header("refresh:1; url=evUpdate.php");
else
{
    echo "not update";
}
?> 
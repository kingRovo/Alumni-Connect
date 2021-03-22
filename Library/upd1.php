<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbase="login";
$connection=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbase);
mysql_select_db($dbase);

$result= mysql_query( "SELECT  file FROM upload " ) 
 or die("SELECT Error: ".mysql_error()); 

print "<table border=1>\n"; 
while($row = mysqli_fetch_array($result)){ 
$files_field= $row['file'];
$files_show= "Uploads/$files_field";
$descriptionvalue= $row['description'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 

?> 
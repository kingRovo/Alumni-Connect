
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<style type="text/css">
	body{
		background-color: gray;
	}
	table,th,td{border:1px solid black;}
</style>
<body>

<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
mysql_select_db($dbname);

  $query="SELECT * FROM  upload ";
  $data=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($data);
?>
<table border="2">
<tr>
<td>download</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{  
	$row=mysqli_fetch_array($data);

?>
<tr>
<td><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>

</tr>

<?php	
}

?>
</table>
</body>
</html>
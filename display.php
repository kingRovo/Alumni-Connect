<!DOCTYPE html>
<html>
<head>
	<title>Update</title>

	<style type="text/css">
	
	body{
		background-color: #0099ff;
	}
	table,th,td{border:1px solid black;}
	th,td{padding: 15px; 
		text-align: left;}
	tr:hover{background-color: #9966ff;}
	th{background-color: #4caf50;
		color:white;
		font-size: 20px;
		text-shadow: 4px 3px blue;}
		input{background-color:#003366;
			padding-left: 5px;
			color:white;}
			
		h1{
			text-shadow: 3px 3px red;
		}

</style>
</head>
<body>
<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
mysql_select_db($dbname);
$sql="SELECT * FROM userinfo";
$records=mysqli_query($con,$sql);

?>
<h1>Alumni Update</h1>
<hr>
<hr>
	<table>
		<tr>
		 
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Branch</th>
			<th>University</th>
			<th>Pass Out</th>
			<th>Company</th>
			<th>Pic path</th>
			<th>Update</th>
        </tr>

	  
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr><form action=update.php method=post>";
		echo "<td><input type=text name=uname value='".$row['name']."'></td>";
		echo "<td><input type=text name=uemail value='".$row['email']."'></td>";
		echo "<td><input type=text name=pass value='".$row['pass']."'></td>";
		echo "<td><input type=text name=brn value='".$row['branch']."'></td>";
		echo "<td><input type=text name=un value='".$row['uname']."'></td>";
		echo "<td><input type=number name=py value='".$row['p_year']."'></td>";
		echo "<td><input type=text name=cname value='".$row['com_name']."'></td>";
		echo "<td><input type=text name=pic value='".$row['pics']."'></td>";
		echo "<input type=hidden name=id value='".$row ['id']."'></td>";
		echo "<td><input type=submit>";
		echo "</form></tr>";
	}
	?>

</body>
</html>
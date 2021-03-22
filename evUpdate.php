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
$sql="SELECT * FROM event";
$records=mysqli_query($con,$sql);

?>
<h1>ADD Event</h1>
<hr>
	<table>
		<tr>
		 
	
			<th>ev_type</th>
			<th>ev_name</th>
			<th>ev_date</th>
			<th>Venue</th>
			<th>Time</th>
			<th>Pic path</th>
			<th>ADD</th>


        </tr>

	  
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr><form action=addEV.php method=post>";
		echo "<td><input type=text name=et value='".$row['ev_type']."'></td>";
		echo "<td><input type=text name= en value='".$row['ev_name']."'></td>";
		echo "<td><input type=text name=ed  value='".$row['ev_date']."'></td>";
		echo "<td><input type=text name=ev value='".$row['Venue']."'></td>";
		echo "<td><input type=text name=etime value='".$row['time']."'></td>";
		echo "<td><input type=text name=pic value='".$row['pics']."'></td>";
		echo "<input type=hidden name=id value='".$row ['ev_id']."'></td>";

		echo "<td><input type=submit>";
		echo "</form></tr>";
	}
	?>
<hr>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Event</title>
	

	<style type="text/css">

	body{
		background-color:#004d33;
	margin:0;
	padding:0;
	font-family:century gothic;
}
h1{
	font-size: 50px;
	margin-left: 40%;
	margin-right: 50%;
	text-shadow: 2px 3px blue;
}
#all{
	margin-top: 6px;
		border-width:  4px ;
		background-color:#99004d;
	
border-style: ridge;
border-radius: 20px;

	float: left;
	margin-left: 10px;
	height: 300%;
	width: 90%;
	font-size: 35px;
}
		#pp{

			margin-left: 40%;
			margin-top: 1%;
}
#pp img{
	height: 200px;
}

	</style>








</head>
<body>

	<h1>EVENTS</h1>
<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
mysql_select_db($dbname);
$sql="SELECT * FROM event";
$data=mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if($total !=0)
{

while($result=mysqli_fetch_assoc($data))

{ 
		echo "<div id = all><div id=pp><img src=".$result['pics']." ></div>
		<div id=type>".$result['ev_type']."</div>
		<div id=name>".$result['ev_name']."</div>
		<div id=date>".$result['ev_date']."</div>
		<div id=venue>".$result['Venue']."</div>
		<div id=time>".$result['time']."</div></div>
";
		
}
}
else
{}
?>
</body>
</html>
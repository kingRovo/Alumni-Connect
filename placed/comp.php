
<!DOCTYPE html>
<html>
<head>
	<title>gallery</title>
	

	<style type="text/css">

	body{
		background-color:#e0ceac;
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
		background-color:#1e915b;
	
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
	float: right;
	height: 200px;
	padding-right: 12px;
}
		#pp1{


			margin-left: 40%;
			margin-top: -1%;
	
		}

#pp1 img{
	float: right;
	height: 200px;
	padding-right: 12px;
	padding-bottom: 4px;
}

	</style>








</head>
<body>

	<h1>Placed</h1>
<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
mysql_select_db($dbname);
$sql="SELECT * FROM placed";
$data=mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if($total !=0)
{

while($result=mysqli_fetch_assoc($data))

{ 
		echo "<div id = all><div id=pp><img src=".$result['path']." ></div>
		<div id=type>".$result['name']."</div>
		<div id=pp1><img src=".$result['Cpic']." ></div>
		<div id=name>".$result['course']."</div>
		<div id=date>".$result['SESSION']."</div>
		<div id=time>".$result['com_name']."</div></div>
";
		
}
}
else
{}
?>
</body>
</html>
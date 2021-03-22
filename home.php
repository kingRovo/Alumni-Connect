<!DOCTYPE html>
<html>
<head>
<title>Alumni connect</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="home.css"> 
<style type="text/css">

  body{
    background-color:#004d33;
  margin:0;
  padding:0;
  font-family:century gothic;
}
#all{

  float: right;
  margin-top: 100px;
    border-width:  4px ;
    background-color:#00004d;
    color: white;
  
border-style: double;
border-radius: 20px;
margin-right: 10%;
padding-left: 5px;
  margin-left: 50px;
  height: 40%;
  width: 20%;
  font-size: 15px;
}
    #pp1{

      margin-left: 40%;
      margin-top: 1%;
}
#pp1 img{
  height: 110px;
  width: 110px;
}

  </style>


</head>
<body >
<header>

<i><h1>Alumni Connect</h1></i>

<?php 

 session_start();
 include('include/dbh.inc.php');

    $user =$_SESSION['email'];
    if ($user==true) {
  
    }
    else
    { header('location: index.php');}

    $query="SELECT * FROM userinfo where email='$user'";
    $data=mysqli_query($con,$query);
    $total=mysqli_fetch_assoc($data);
    

  ?>
<div id="link">
<ul>
<li><a href ="placed/index.php"><b>Placed</b></a></li>

<li><a href ="event.php"><b>Event</b></a></li>
<li><a href ="library/index.html"><b>Library</b></a></li>

</ul>
</div>
</header>
  <div id="block" ></div>
  <div id="common">

	<div id="pp"><img src="<?php echo $total['pics'];?>"height="100" width='100'></div>
	<div id="name">Name : <?php echo $total['name'];  ?> </div>
	<div id="university">University : <?php echo $total['uname'];  ?></div>
	<div id="branch">Branch : <?php echo $total['branch'];  ?></div>
	<div id="year">Pass-Out : <?php echo $total['p_year'];  ?></div>
	<div id="placed">Placed : <?php echo $total['com_name'];  ?></div>
	</div>
    



    <div class="event"><marquee><i style="color: white;"> 1.The Data science Workshop on 12/04/2019 in gla university  block(X) Room no. 331.
    2.Python Workshop on 5/05/2019 in gla university  block 'I' Room no. 431 by updesh yadav.</i></marquee></div>
   <div id="logoutl"> <a href="logout.php" id="logout"><b>Log Out</b></a></div>



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
    echo "<div id = all><div id=pp1><img src=".$result['pics']." ></div>
    <div id=type>".$result['ev_type']."</div>
    <div id=name1>".$result['ev_name']."</div>
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
 


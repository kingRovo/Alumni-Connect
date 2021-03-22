<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "login";
$conn = mysqli_connect($server,$user,$pass,$database);
if(!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}
$company = $_GET['company'];



?>


<!DOCTYPE html>
<html>
<head>
  <style type="text/css">

    .plcestd{ width:100%; float:left;margin:10px 0;padding:0; slist-style-type:none;}
 .plcestd li{ width:48%; float:left;margin:0;margin-right:1%; margin-left: 1%; margin-bottom:2%; list-style-type:none; background-color:#f6f6f6; padding-bottom:0;}
  .plcestd li:last-child;{margin-right:0;}

.plcestwrp{width:100%; float:left; position:relative; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);}
.plcestdimg{width:30%; float:left;margin-right:4%;}
.plcestdimg img{width:100%; height:auto; max-height:153px; min-height:153px;}

.plcestdtxt{width:63%;float:left; padding:1%;}
.cmnme{ color:#1a5448;font:600 14px/18px 'Open Sans', serif; margin-top:10px; position:absolute; bottom:20px;}
.cmnme a { text-decoration:none; color:#1a5448;}
.cshdg{font: bold 16px/21px 'Titillium Web', sans-serif;}
.cshdg span{font: 14px/18px 'Open Sans', serif; display:block; padding-top:5px;}

.cshdg .cmnme{ color:#1a5448;font:600 14px/18px 'Open Sans', serif; margin-top:10px; position:absolute; bottom:20px;}
.cshdg .cmnme a { text-decoration:none; color:#1a5448;}
*{margin: 0px;
padding: 0px;}
body {

  font-family: Arial, Helvetica, sans-serif;
background-image: url("bimage/<?php echo $company; ?>.jpg"); 
  background-size: cover;

}



</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<ul class="plcestd">
  <?php
  $query="select * from placed where companyname='$company' order by id";
  $result=mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result)){
  ?>
         <li><div class="plcestwrp"><div class="plcestdimg"><a href= ><img src="<?php echo $row['path']; ?>" alt=""></a></div>
           <div class="plcestdtxt"><div class="cshdg"><?php echo $row['studentname']; ?><span><?php echo $row['course']; ?>, 
            <?php echo $row['SESSION']; ?></span>
          <div class="cmnme"><?php echo $row['company']; ?></div>
          
          </div></div>
           </div>
           </li>';
            
<?php
}
?>


          
            




         </ul>


         


</body>
</html> 

 
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>

<style type="text/css">
	body{
		background-color: #5987d1;
	}
	input{border:1px solid black;}
</style>
<body>


<?php

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";
$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
mysql_select_db($dbname);

if(isset($_REQUEST["submit"]))
{
	 $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="upload/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv");
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);
 
mysql_query("INSERT INTO upload (file)VALUES('$file')");

}
}

?>


<form action = "btechd.php" enctype="multipart/form-data" method="post">

File Upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">

</form>
</body>
</html>

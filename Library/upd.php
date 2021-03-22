
<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbase="login";
$connection=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbase);
mysql_select_db($dbase);
if(isset($_REQUEST["submit"]))
{
$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
$submitbutton= $_POST['submit'];
$position= strpos($name, "."); 
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);
$description= $_POST['description_entered'];
if (isset($name)) {
$path= 'upload/';
if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
mysql_query("INSERT INTO upload (description, filename)
VALUES ('$description', '$name')");
}
}
}
}
?>


<form action="btechd.php" method='post' enctype="multipart/form-data">
Description of File: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload"/>

</form>

<!-- <?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbase="login";
$connection=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbase);
mysql_select_db($dbase);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($dbase);


if(!empty($description)){
mysql_query("INSERT INTO upload (description, filename)
VALUES ('$description', '$name')");
}

?> -->











<?php
session_start();
if (isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
	$uem= mysqli_real_escape_string($con,$_POST['email']);
    $pw= mysqli_real_escape_string($con,$_POST['pwd']); 


    $query="SELECT * FROM  admine where email ='$uem' and pass='$pw'";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
 
    if($total == 1)
    {
        $_SESSION['email']=$uem;
        header('location: ../updatehome.html?login=success');
        exit();
    }

    else
    {
      header('location: ../index.php?login=error');
    exit();  
    }
}
else
{
    header('location: ../index.php?login=error');
    exit();
 }    
?>

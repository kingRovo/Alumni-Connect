<?php


if (isset($_POST['submit']))
{
include_once 'dbh.inc.php';

    
    $name= $_POST['name']; 
    $db= $_POST['dob']; 
    $brn= $_POST['brn']; 
    $jy= $_POST['jy']; 
    $u_name= $_POST['uname']; 
	$uem= $_POST['email'];
    $pw= $_POST['pwd'];
   

// ERROR HANDELERS
    if(empty($name) || empty($db) || empty($brn) || empty($jy) || empty($u_name) || empty($uem)  || empty($pw) )
    {
         header("location: ../registration.php?registration = empty");
         exit();
    }
    else
    {

    $query="SELECT * FROM student where email='$uem' and pass='$pw'";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);

    if($total == 1)
    {
       
        header('location: ../registration.php?signup=duplicate');
        exit();
    }
    
            else
                    {
                $sql="INSERT INTO students (email,pass,name,dob,branch,un_name,joining) VALUES ('$uem','$pw','$name','$db','$brn','$u_name','$jy')";
                mysqli_query($con,$sql);
                header('location: ../home.php?signup=success');
                exit();
            }
    }

}
else
{
	header("location: ../registration.php");
    exit();
}

?>
<?php


if (isset($_POST['submit']))
{
include_once 'dbh.inc.php';

    
    $name= $_POST['name']; 
    $db= $_POST['dob']; 
    $brn= $_POST['brn']; 
    $py= $_POST['py']; 
    $uname= $_POST['uname']; 
	$uem= $_POST['email'];
    $pw= $_POST['pwd'];
    $cn= $_POST['c_name'];

// ERROR HANDELERS
    if(empty($name) || empty($db) || empty($brn) || empty($py) || empty($uname) || empty($uem)  || empty($pw) || empty($cn) )
    {
         header("location: ../registration.php?registration = empty");
         exit();
    }
    else
    {

    $query="SELECT * FROM userinfo where email='$uem' and pass='$pw'";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);

    if($total == 1)
    {
       
        header('location: ../registration.php?signup=duplicate');
        exit();
    }
    
            else
                    {
                $sql="INSERT INTO userinfo(email,pass,name,dob,branch,uname,p_year,com_name) VALUES ('$uem','$pw','$name','$db','$brn','$uname','$py','$cn')";
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
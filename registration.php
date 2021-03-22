		 
<!DOCTYPE html>
<html>
<head>
	<title>
		 Registration</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <style type="text/css"> 
		 a{
	text-decoration: none;
	color:#15315e;
}
       a:hover {
                
                text-decoration: underline;
                color: blue;
                
            }
		</style>
</head>
<body>
<div class="title">
<h1><a href="signup.php">Student Sign Up</a><h1>
</div>
	<div id="header1">
		<div class="main">
<div class ="box1">
<img src="pp1.png" class="usr1">
<h1>New Registration(Alumni)</h1>
<form action="include/signup.inc.php" method="POST">
	<p>Name</p>
	<input type="text" name="name" placeholder="Enter Name" >
	<p>Date of Birth</p>
	<input type="Date" name="dob" placeholder="Enter D.O.B" >
	<p>Branch</p>
	<input type="text" name="brn" placeholder="Enter Branch" >
	<p>Year of Passout</p>
	<input type="number" name="py" placeholder="Enter Passout Year" >
	<p>University Name</p>
	<input type="text" name="uname" placeholder="Enter University Name" >
	  <p>Current Working place</p>
	<input type="text" name ="c_name" placeholder="Enter Current Working place" > 
    <p>Email</p>
    <input type="email" name="email" placeholder="Enter Email" >
    <p>Password</p>
    <input type="password" name="pwd" placeholder="Enter Password">
    <button type="submit" name="submit" >Sign up</button> 
</form>
</div>
</div>
</div>
</body>
</html>

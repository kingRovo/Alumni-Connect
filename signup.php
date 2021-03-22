 		 
<!DOCTYPE html>
<html>
<head>
	<title>
		 Registration</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="title">
</div>
	<div id="header1">
		<div class="main">
<div class ="box1">
<img src="pp1.png" class="usr1">
<h1>New Registration(Student)</h1>
<form action="include/stdata.inc.php" method="POST">
	<p>Name</p>
	<input type="text" name="name" placeholder="Enter Name" >
	<p>Date of Birth</p>
	<input type="Date" name="dob" placeholder="Enter D.O.B" >
	<p>Branch</p>
	<input type="text" name="brn" placeholder="Enter Branch" >
	<p>Year of joining</p>
	<input type="number" name="jy" placeholder="Enter Joining Year" >
	<p>University Name</p>
	<input type="text" name="uname" placeholder="Enter University Name" >
    <p>Email</p>
    <input type="Emails" name="email" placeholder="Enter Email" >
    <p>Password</p>
    <input type="password" name="pwd" placeholder="Enter Password">
    <button type="submit" name="submit" >Sign up</button> 
</form>
</div>
</div>
</div>
</body>
</html>

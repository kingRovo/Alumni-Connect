

 <!DOCTYPE html>
 <html>
 <head>
 <title> Alumni Connect</title> 
 <link rel="stylesheet" type="text/css" href="style.css">
 <style type="text/css">
  #student a{margin-top: 20%;
 	font-size: 30px;
 	margin-left: 25%;
 }
  a:hover {
                
                text-decoration: underline;
                color: #212e6b;
            }
              #admine a{margin-top: 20%;
 	font-size: 20px;
 	margin-top: -10px;
 	margin-left: 8%;
 }
  a:hover {
                
                text-decoration: underline;
                color: #212e6b;
</style>

</head>

 <body>
<header>
<div class="main">
<div class="logo">
<img src="logo1.png">
</div>
<ul>
<li><a href="registration.php">Registration</a></li>
<li><a href="about.html">About </a></li>
</ul>
</div>
<div class="title ">
<h1 style="color: white;top: 90%;font-size: 40px; text-shadow: 3px 3px blue"><i>ALUMNI CONNECT</i><h1>
	
</div>
<div class ="box">
<img src="pp1.png" class="usr">
<h2>Login to your account</h2>
<form action="include/login1.inc.php" method="POST">
<p>Email    [ALUMNI]</p>
<input type="email" name ="email"placeholder="Enter Email" >
<p>Password</p>
<input type="password" name="pwd" placeholder="Enter Password" ><br>
<button type="submit" name="submit">Login</button>
<div class="fg"><a href="#forget.php" ><b>Forgot Password<b></a></div>
</form> 
</div>
<h2 id="student"><a href="index.php">Student LogIn</a></h2>
<h2 id="admine"><a href="Admine.php">Admin LogIn</a></h2>
</header>
</body> 
</html>







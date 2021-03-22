<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{margin: 0px;}
body {
  font-family: Arial, Helvetica, sans-serif;
background-image: url("GLA.jpg"); 
  background-size: cover;

}
h1{font-size: 50px;color:#1f0d3f;
text-shadow: 3px 3px white; }
p{text-shadow: 3px 3px white;color:#1f0d3f; font-size: 30px;}
hr{border: 3px solid  black;}

.container {
  width:95%;
  position: relative;
  color: #1f0d3f;
  margin: auto;
}

div.gallery {

  margin: 4px;
  border: 4px solid #1f0d3f;;
  float: left;
  width: 300px;
  box-sizing: border-box;
}
div.gallery:nth-last-child(1){
	clear:left;
}

div.gallery:hover {
  border: 6px solid #660033;
}

div.gallery img{
	width:100%;
	height: 300px;
}


div.desc {
  padding: 15px;
  text-align: center;
  font-size: 25PX;


}
.desc a{text-decoration: none; color: #1f0d3f;}
.desc a:hover{text-decoration: color blue; font-size: 35px;}
.sub{
  width: 200px;
  height: 40px;
  background-color: #33b5e5;
  border-color: #33b5e5;
  border-radius: 10px;
  cursor: pointer;
}
.sub:hover{
  box-shadow: 3px 5px black;
}

</style>
</head>
<body>

<h1>GALLARY</h1>
<p>TOP FIVE COMPANYS.</p>
<hr>	
<div class="container">
  
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="bimage/Capgemini.jpg"jpg alt="1"  width="600" height="400">
  </a>
  <div class="desc"><a href="alumni.php?company=<?php echo 'Capgemini'; ?>">Capgemini</a></div>

</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="bimage/Wipro.jpg" alt="1" width="600" height="400">
  </a>
  <div class="desc"><a href="alumni.php?company=<?php echo 'Wipro'; ?>">Wipro</a></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="bimage/DRIVE DIGITAL.jpg" alt="1" width="600" height="400">
  </a>
  <div class="desc"><a href="alumni.php?company=<?php echo 'Drive Digital'; ?>">Drive Digital</a></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="bimage/British Telecom.jpg" alt="1" width="600" height="400">
  </a>
  <div class="desc"><a href="alumni.php?company=<?php echo 'British Telecom'; ?>">British Telecom</a></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="bimage/tcs.jpg" alt="1" width="600" height="400">
  </a>
  <div class="desc"><a href="alumni.php?company=<?php echo 'TCS'; ?>">TCS</a></div>
</div>
</div>

</body>
</html>
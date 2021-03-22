<?php
if($_POST['city']){
  $link=file_get_contants('https://www.weather-forecast.com/');
  echo $link;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->s
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Find Weather</title>
    <style type="text/css">
      html{
        background: url(bg.jpg) no-repeat center center fixed;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size: cover;

      }
      body{
        background:none;  
      }
      .container{
        text-align: center;
        margin-top:200px; 
        width: 450px;
      }
      input{
        margin:20px 0;
      }

    </style>
  </head> 
  <body>
    <div class="container">
    <h1>What's The Weather?</h1>
  
   
    <form method="POST">
  <fieldset class="form-group">
    <label for="city">Enter the name of the city.</label>
    <input type="text" class="form-control"name="city" id="city " placeholder="Eg. Mathura , Agra">

  </fieldset>
 
  <button type="submit" class="btn btn-primary">Submit</button> 
     </form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFD sf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
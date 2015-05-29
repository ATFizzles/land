<?php 

  require_once(__DIR__ . "/../model/constant.php");
  

 ?>


<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" 
              data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="index.php">Home</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://www.edlinesites.net/UserProfileView.page">My Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="index2.php">Homepage</a></li>
        <li><a href="view/form.php">Contact</a></li>
        <li><a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">Login to Instagram</a></li>        
      </ul>
     </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
 <body>                           

 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-4_zps63ff5aa8.jpg" alt="shovel2" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-main_zps26d178c5.jpg" alt="shovel2" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-2_zps1539e6b2.jpg" alt="shovel" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-9_zps3bab7732.jpg" alt="shovel3" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-3_zps4692eafa.png" alt="shovel" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-1_zps5666b8e7.jpg" alt="shovel" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-5_zps0ee0d2c8.jpg" alt="shovel" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-6_zpsc4450a60.jpg" alt="shovel" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-7_zps26e8a8d9.jpg" alt="shovel" height="350px" width="450px">
      </div>
      <div class="item">
         <img src="http://s3.amazonaws.com/codecademy-blog/assets/puppy-8_zps9a1469be.jpg" alt="shovel" height="350px" width="450px">
      </div>
    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   
               
        
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
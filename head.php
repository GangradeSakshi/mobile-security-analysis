<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/foodie.js"></script>
    <style>
      html body .admin{
        <?php
          if($_SESSION['library_username']!='admin'){
            echo "display:none;";
          }
        ?>
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
     <!--     <a class="navbar-brand" href="home.php">Mobile Security Checking Site</a>  -->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
			<li><a href="linear_regression.php">Linear Regression Result</a></li>
			<li><a href="charts.php">Charts</a></li>
			<li><a href="checking.php">Checking</a></li>
       <!--    <li><a href="signupform.php">Feature</a></li>  -->
	<!--	  <li><a href="adminloginform.php">Admin Login</a></li>   -->
		  

            <?php
              if(isset($_SESSION['userid'])){
                echo '<li><a href="logouttest.php?action=logout">Sign Out</a></li>';
                echo '<li><a>Current User: '.$_SESSION['library_username'].'</a></li>';
              }else{
  //              echo '<li><a href="loginform.php">Membership Login</a></li>';      
              }
            ?>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" style="margin-top:40px;">
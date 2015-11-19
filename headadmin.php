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
          if($_SESSION['library_username']!='Admin'){
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
   <!--       <a class="navbar-brand" href="home.php">Library Management</a>    -->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="checking.php">Checking</a></li>
            <li><a href="addbook.php">Feature</a></li>
            <li><a href="deletebook.php">Chart</a></li>
       <!-- <li><a href="activityadmin.php">Activity Event</a></li>      -->
       <!--    <li><a href="issue.php">Checked out</a></li>              -->
            <?php
			  if($_SESSION['admin_username']='Admin'){
				echo '<li><a href="logouttest.php?action=logout">Sign Out</a></li>';
				echo '<li style="margin-left:80px;"><a><font color="white">Current User: '.$_SESSION['library_username'].'</font></a></li>';
              }
            ?>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" style="margin-top:40px;">
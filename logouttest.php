<?php include_once("dbtest.php"); 
      include 'head.php';

?>

<?php

session_unset(); #remove all the variables in the session
session_destroy(); #destroys the session

header("location:adminloginform.php?msg=Successfully Logged out");


//if (!$_SESSION['userName']){
//	echo "<h1>Successfully logged out!</h1><br />";
//    echo "<br /><a href='adminloginform.php'>Login</a>";
//}
	
//else{
//	echo "Error Occured!<br />";
//	echo "<br /><a href='adminloginform.php'>Login</a>";
//}

?>
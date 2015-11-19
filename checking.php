<?php
include 'head.php';
include 'connect.php';
?>

<h3>Mobile Security Checking</h3>

<html>
      <form action="" method="post">
      	<!--label for="id">ID</label><br />
      	<input type="text" name="userid" id="userid"><br /-->
      	<br /><label for="name">Mobile App</label><br />
      	<input type="text" name="username" id="username"><br />
      	<br /><label for="password">SDK Name</label><br />
      	<input type="password" name="password" id="password"><br />
   <!--   	<br /><input type="submit" id="submit" name="submit" value="Submit">    -->
		<br /><button type="submit" class="btn btn-primary">Submit</button>
      </form>

<?php

	if(isset($_POST['submit'])) {
		//$userid = $_POST['userid'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		//if (empty($userid) || empty($username) || empty($password)) {
		if (empty($username) || empty($password)) {
			//$error = "ID, Username or Password is invalid";
			echo '<script type="text/javascript">alert("Username or Password is invalid");</script>';
		} else {
			// To protect MySQL injection for Security purpose
			//$userid = stripslashes($id);
			$username = stripslashes($username);
			$password = stripslashes($password);
			//$userid = mysqli_real_escape_string($conn,$userid);
			$username = mysqli_real_escape_string($conn,$username);
			$password = mysqli_real_escape_string($conn,$password);

			// SQL query to fetch information of registerd users and finds user match.
			if($result = mysqli_query($conn, "select * from membership where password=$password AND username='admin'")){
				$rows = mysqli_num_rows($result);
				if ($rows == 1) {
				    $obj=mysqli_fetch_object($result);
					$_SESSION['library_username']=$username; // Initializing Session
					//$_SESSION['userid']=$obj->id;
					header("location: libraryadmin.php"); // Redirecting To Other Page
				} else {
					echo '<script type="text/javascript">alert("Username or Password is invalid");</script>';
				}
			}
			mysqli_close($conn); // Closing Connection
		}
	}

?>

</html>

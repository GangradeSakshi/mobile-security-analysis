<?php
include('db.php');
$conn = mysqli_connect($host,$username,$password,$database);
if (!$conn){
    die("database connection failed" . mysql_error());
}
//mysqli_select_db($database, $conn);
// mysql_query("set character set 'gbk'");
// mysql_query("set names 'gbk'");
//if(!isset($_POST['submit'])){
//	exit('visit !');
//}
//$username = $_POST['username'];
//$password = $_POST['password'];
//if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
//	exit('Invalid Unser Name! <a href="javascript:history.back(-1);">return</a>');
//}
//if(strlen($password) < 6){
//	exit('Password Not long enough! <a href="javascript:history.back(-1);">return</a>');
//}

?>
<?php
session_start();

require_once('../PHP/connect.php');


$username = $password  = '';


$username = $_POST['username'];
$password = $_POST['password'];

include '../PHP/connect.php';

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) >= 1)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$username = $row["username"];
		$_SESSION['id'] = $id;
		$_SESSION['username'] = $username;
	}
    echo "<script type='text/javascript'>alert('Login Success!')</script>";
	header('refresh:0; url=../PHP/BihiSItee-home.php');
}
else
{
	echo "<script type='text/javascript'>alert('Username or Password Failed! Try again.')</script>";
 	header('refresh:0; url=../PHP/login.php');
}
mysqli_close($con);

?>
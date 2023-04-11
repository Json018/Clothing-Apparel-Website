<?php 
$givenname = $surname = $middlename = $gender = $email = $phonenumber = $username = $password = '';
$count;


$givenname = $_POST["givenname"];
$surname = $_POST["surname"];
$middlename = $_POST["middlename"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$username = $_POST["username"];
$password = $_POST["password"];


include '../PHP/connect.php';

$sql = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
  echo "<script type='text/javascript'>alert('Your Username or Email is already exist. Please try again!')</script>";
  header('refresh:0; url=../PHP/Register.php');
}
else{

  $insert = "INSERT INTO user (givenname, surname, middlename, gender, email, phonenumber, username, password) 
  VALUES ('$givenname', '$surname', '$middlename','$gender','$email','$phonenumber','$username','$password')";
  if (mysqli_query($con, $insert)){
  echo "<script type='text/javascript'>alert('Registration Success. Log in now!')</script>";
  header('refresh:0; url=../PHP/login.php');
  }
}

 mysqli_close($con);
?>
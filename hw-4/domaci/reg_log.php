<?php
session_start();

// initializing variables
$name = "";
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$data_base = mysqli_connect('localhost', 'root', '', 'filmklub');

// Registration
if (isset($_POST['register'])) {
  $name = mysqli_real_escape_string($data_base, $_POST['name']);
  $username = mysqli_real_escape_string($data_base, $_POST['username']);
  $email = mysqli_real_escape_string($data_base, $_POST['email']);
  $password_1 = mysqli_real_escape_string($data_base, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($data_base, $_POST['password_2']);

  if (empty($name)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($username)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($email)) {
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";} 
  if (empty($password_1)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if ($password_1 != $password_2) {

      echo "<script>alert('Niste uneli iste sifre'); window.history.back;</script>";
	}

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($data_base, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {

      echo "<script>alert('Korisnicko ime je zauzeto'); window.history.back;</script>";
     
    }

    if ($user['email'] === $email) {
      
      echo "<script>alert('e-mail se vec koristi'); window.history.back;</script>";}
     
  }

  if (count($errors) == 0) {
  	$password = $password_1;

  	$query = "INSERT INTO users (name, username, email, password) 
  			  VALUES('$name','$username', '$email', '$password')";
  	mysqli_query($data_base, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Dobrodosli";
  	header('location: index.php');
  }
}
// loging
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($data_base, $_POST['username']);
  $password = mysqli_real_escape_string($data_base, $_POST['password']);

  if (empty($username)) {
   
      echo "<script>alert('Niste uneli korisnicko ime'); window.history.back;</script>";}
  
  if (empty($password)) {
   
      echo "<script>alert('Niste uneli sifru'); window.history.back;</script>";
  }

  if (count($errors) == 0) {
    $password = $password;
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($data_base, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      header('location: index.php');
    }else {
      
      echo "<script>alert('Uneli ste pogresno korisnicko ime ili sifru'); window.history.back;</script>";}
    
  }
}

//admins login
if (isset($_POST['admin_lg'])) {
  $username = mysqli_real_escape_string($data_base, $_POST['username']);
  $password = mysqli_real_escape_string($data_base, $_POST['password']);

  if (empty($username)) {
   
      echo "<script>alert('Niste uneli korisnicko ime'); window.history.back;</script>";}
  
  if (empty($password)) {
   
      echo "<script>alert('Niste uneli sifru'); window.history.back;</script>";
  }

  if (count($errors) == 0) {
    $password = $password;
    $query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $results = mysqli_query($data_base, $query);
    if (mysqli_num_rows($results) > 0) {
      $_SESSION['username'] = $username;
      header('location: index_admin.php');
    }else {
      
      echo "<script>alert('Uneli ste pogresno korisnicko ime ili sifru'); window.history.back;</script>";}
    
  }
}
?>
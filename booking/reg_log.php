<?php
session_start();

// initializing variables
$name = "";
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$data_base = mysqli_connect('localhost', 'root', '', 'j&m');

// Registration for users
if (isset($_POST['register'])) {
  $name = mysqli_real_escape_string($data_base, $_POST['name']);
  $username = mysqli_real_escape_string($data_base, $_POST['username']);
  $email = mysqli_real_escape_string($data_base, $_POST['email']);
  $password_1 = mysqli_real_escape_string($data_base, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($data_base, $_POST['password_2']);

  if (empty($user)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
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
  $user1 = mysqli_fetch_assoc($result);
  
  if ($user1) { 
    if ($user1['username'] === $username) {

      echo "<script>alert('Korisnicko ime je zauzeto'); window.history.back;</script>";
     
    }

    if ($user1['email'] === $email) {
      
      echo "<script>alert('e-mail se vec koristi'); window.history.back;</script>";}
     
  }

  if (count($errors) == 0) {
  	$password = $password_1;

  	$query = "INSERT INTO users (name, username, email, password) 
  			  VALUES('$name','$username', '$email', '$password')";
  	mysqli_query($data_base, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Dobrodosli";
  	header('location: user/index_user.php');
  }
}

// Registration za izdavace
if (isset($_POST['register_i'])) {
  $name = mysqli_real_escape_string($data_base, $_POST['name']);
  $username = mysqli_real_escape_string($data_base, $_POST['username']);
  $email = mysqli_real_escape_string($data_base, $_POST['email']);
  $password_1 = mysqli_real_escape_string($data_base, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($data_base, $_POST['password_2']);

  if (empty($user)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
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

  $user_check_query = "SELECT * FROM users_i WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($data_base, $user_check_query);
  $user1 = mysqli_fetch_assoc($result);
  
  if ($user1) { 
    if ($user1['username'] === $username) {

      echo "<script>alert('Korisnicko ime je zauzeto'); window.history.back;</script>";
     
    }

    if ($user1['email'] === $email) {
      
      echo "<script>alert('e-mail se vec koristi'); window.history.back;</script>";}
     
  }

  if (count($errors) == 0) {
    $password = $password_1;

    $query = "INSERT INTO users_i (name, username, email, password) 
          VALUES('$name','$username', '$email', '$password')";
    mysqli_query($data_base, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Dobrodosli";
    header('location: user_i/index_i.php');
  }
}


// user loging
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
      header('location: user/index_user.php');
    }else {
      
      echo "<script>alert('Uneli ste pogresno korisnicko ime ili sifru'); window.history.back;</script>";}
    
  }
}



//za svaku posebno sam pisao
// izdavac loging
if (isset($_POST['login_i'])) {
  $username = mysqli_real_escape_string($data_base, $_POST['username']);
  $password = mysqli_real_escape_string($data_base, $_POST['password']);

  if (empty($username)) {
   
      echo "<script>alert('Niste uneli korisnicko ime'); window.history.back;</script>";}
  
  if (empty($password)) {
   
      echo "<script>alert('Niste uneli sifru'); window.history.back;</script>";
  }

  if (count($errors) == 0) {
    $password = $password;
    $query = "SELECT * FROM users_i WHERE username='$username' AND password='$password'";
    $results = mysqli_query($data_base, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      header('location: user_i/index_i.php');
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
      header('location: admin/index_admin.php');
    }else {
      
      echo "<script>alert('Uneli ste pogresno korisnicko ime ili sifru'); window.history.back;</script>";}
    
  }
}







// Registration za izdavace
if (isset($_POST['posalji'])) {
  $ime = mysqli_real_escape_string($data_base, $_POST['ime']);
  $prezime = mysqli_real_escape_string($data_base, $_POST['prezime']);
  $email = mysqli_real_escape_string($data_base, $_POST['email']);
  $poruka = mysqli_real_escape_string($data_base, $_POST['poruka']);
  
  if (empty($ime)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($prezime)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($email)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($poruka)) {
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";} 
  
  if (count($errors) == 0) {

    $query = "INSERT INTO poruke (ime, prezime, email, poruka) 
          VALUES('$ime','$prezime', '$email', '$poruka')";
    mysqli_query($data_base, $query);
    
    echo "<script>alert('Hvala sto ste ostavili komentar o nasoj stranici!'); window.location = 'http://localhost/d1/index.php'</script>";
  
  }
}








?>
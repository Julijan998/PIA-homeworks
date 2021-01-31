<?php
session_start();

// initializing variables

$id="";
$name = "";
$genre="";
$relase_date="";
$duration="";
$production="";
$director="";
$writer="";
$cast="";
$description="";
$errors = array(); 

// connect to the database
$data_base = mysqli_connect('localhost', 'root', '', 'filmklub');

// Registration
if (isset($_POST['insert'])) {
  $id = mysqli_real_escape_string($data_base, $_POST['id']);
  $name = mysqli_real_escape_string($data_base, $_POST['name']);
  $genre = mysqli_real_escape_string($data_base, $_POST['genre']);
  $relase_date = mysqli_real_escape_string($data_base, $_POST['relase_date']);
  $duration = mysqli_real_escape_string($data_base, $_POST['duration']);
  $production = mysqli_real_escape_string($data_base, $_POST['production']);
  $director = mysqli_real_escape_string($data_base, $_POST['director']);
  $writer = mysqli_real_escape_string($data_base, $_POST['writer']);
  $cast = mysqli_real_escape_string($data_base, $_POST['cast']);
  $description = mysqli_real_escape_string($data_base, $_POST['description']);

if (empty($id)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($name)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($genre)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($relase_date)) {
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";} 
  if (empty($duration)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($production)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($director)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($writer)) {
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";} 
  if (empty($cast)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  if (empty($description)) { 
      echo "<script>alert('Niste popunili sva polja'); window.history.back;</script>";}
  

  $movies_check_query = "SELECT * FROM movies_1 WHERE name='$name' OR id='$id' LIMIT 1";
  $result = mysqli_query($data_base, $movies_check_query);
  $movies = mysqli_fetch_assoc($result);
 // $id=mysqli_num_rows($results)+1;
  
  if ($movies) { 
    if ($movies['name'] === $name) {

      echo "<script>alert('Film vec postoji u bazi'); window.history.back;</script>";
     
    }
   if ($movies['id'] === $id) {

      echo "<script>alert('Film sa unetim id-om vec postoji u bazi podataka. Trenutni broj filmova je: '); window.history.back;</script>";
     
    }

   }
  if (count($errors) == 0) {

  	$query = "INSERT INTO movies_1 (id, name, genre, relase_date, duration, production, director, writer, cast, description) 
  			  VALUES('$id','$name','$genre', '$relase_date', '$duration', '$production', '$director', '$writer', '$cast', '$description')";
  	mysqli_query($data_base, $query);
  	$_SESSION['id'] = $id;
  	header('location: index_admin.php');
     
  
  }
}



?>

<!DOCTYPE html>

<html>
<head>
  <title>Novi film</title>
  <link rel="stylesheet" type="text/css" href="static/register.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" type="text/css">
<style type="text/css">
  body{
    background-image: url("static/images/907544.jpg");
    background-size: cover;
  }
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
 
}

.login-box input{
    margin-bottom: 20px;
}

.login-box input[type="text"], input[type="int"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box button
{
    border: none;
    outline: none;
    height: 40px;
   background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.login-box button:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}
</style>
</head>

<body>


  <div class="login-box">
    <h1></h1>
      <form class=" text-white text-center" action="insert.php" method="post">
       <div class="container">
  <div class="row">
    <div class="col-6 col-md-4"></div>
    <div class="col-6 col-md-4">
       <p>ID<br>
        <input type="text" name="id" ></p>
        <p>Name<br>
        <input type="text" name="name" ></p>
        <p>Genre<br>
        <input type="text" name="genre" ></p>
        <p>Relase date<br>
        <input type="text" name="relase_date" ></p>
        <p>Duration<br>
        <input type="int" name="duration" ></p>
        <p>Production Company<br>
        <input type="text" name="production" ></p>
        </div>

        <div class="col-6 col-md-4">
        
        <p class="mr-5">Director<br>
        <input type="text" name="director" ></p>
        <p class="mr-5">Writer<br>
        <input type="text" name="writer" ></p>
        <p class="mr-5">Cast<br>
        <input type="text" name="cast" ></p>
        <p class="mr-5">Description<br>
        <input type="text" name="description" ></p>
        
        <button type="submit" class="btn mr-5" name="insert">Dodaj film</button>
  </div></div>
      </form>
  </div>
</body>
</html>
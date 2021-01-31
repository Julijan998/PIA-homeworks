<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    header('location: FilmKlub.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: FilmKlub.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
  <link href="static/index.css" rel="stylesheet">

  <style>
    h2{
      text-align: center;
      }

    .card-body{
      background-color: #000;
    }
  </style>

  <title>Pretraga</title>
</head>
<body style="background-color: #000; color: white;">





  <nav class="navbar fixed-top navbar-expand-lg  navbar-light border-bottom border-bottom-1 border-warning bg-dark">
    <div class="container-fluid ">
     <a class="navbar-brand" style="margin-right: 5%;" href="index_admin.php">
    <img style="width: 150px; height: 40px;" src="static/images/filmklub.png" alt="">
  </a>  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-5 mr-auto mb-2 mb-lg-0 ">

         <li class="nav-item ">
            <?php  if (isset($_SESSION['username'])) : ?>
     <a href="index.php?logout='1'" class="nav-link bg-danger rounded text-white mr-2">Odjavite se</a>
    <?php endif ?>

      </li>

    <li class="nav-item ">
           <a class='nav-link active' style='color: white' href="index_admin.php">Početak</a>
           </li>
          <li class="nav-item justify-content-end">
           <a class='nav-link active' style='color: white' href="category_admin.php">Kategorije</a>
           </li>
        </ul> 
 
 <form action="search.php" class="form-inline">
    <input class="mr-sm-2 align-middle rounded" style="height: 44px;" name="search" type="search" placeholder="Pretraži" aria-label="Search">
    <button class="btn align-middle btn-outline-success my-2 my-sm-0" type="submit">Pretraži</button>
  </form>

      </div>
    </div>
  </nav>
  <br><br><br>
  <?php

  $search = $_GET['search'];
  echo "<h2>Rezultat pretrage: $search</h2>";

  // connect to the database
  $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  $found = false;
  $query = "SELECT * FROM movies_1 WHERE name LIKE '%$search%' ORDER BY name";
  $res = mysqli_query($connection, $query);
  if(mysqli_num_rows($res) > 0){
    $found = true;
    echo "<div class='container-fluid'>";
    echo "<div class='row'><div class='row gy-4'>";
    for($i = 0; $i < mysqli_num_rows($res); $i++){
      $row = mysqli_fetch_assoc($res);
      $id = $row['id'];
      $name = $row['name'];
      $img = "static/movies/image".$id.".jpg";
      

      echo "<div class='col-md-3 offset-md-2'>";
      echo "<div class='text-center justify-content-center'>";
      echo "<div class='card-body'>";
      echo "<form action='movies_admin.php'><input type='hidden' name='id' value=$id>";

      echo "<button type='submit' class='btn'><img  src='$img' class='card-img-top' alt='cover photo'></button>
      </form>";

      echo "<h5 class='card-title mt-2'>$name</h5>";
      echo "</div></div></div>";
    }
  }

  if($found)
    echo "</div></div></div></div><br>";
  else
    echo "<script>alert('Ime filma koji ste uneli nije pronadjen na sajtu.'); window.location = window.history.back();</script>";

  ?>

<footer class="bg-dark  text-lg-start">
  <div>
    <p class="text-center ml-5 pt-1">
      <img src="static/images/Film-Klub-logo.png" class="text-left mr-5" style="height: 70px;">
    <p class=" pt-2 border-top border-bottom-2 border-danger text-center">Januar 2021 - Julijan Stojanović</p>

  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>
</html>

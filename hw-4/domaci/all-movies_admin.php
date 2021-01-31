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

  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
  <link href="static/index.css" rel="stylesheet">

  <style>

    .unstyled-button {
      border: none;
      padding: 0;
      background: none;
      }

      .row div{
        padding: 0;
      }

      h2{
        text-align: center;
      }
body{
 /* margin-left: 7%;
  margin-right: 7%;*/
 justify-content: center;
}
h1{
  margin-left: 10%;
  margin-right: 10%;
  text-align: center;
}     

  </style> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <title>Svi filmovi</title>
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
          <li class="nav-item ">
            <?php echo "<a class='nav-link text-white active' href='all-movies_admin.php'>Svi filmovi</a>"; ?>
          </li> 
          <li class="nav-item justify-content-end">
           <a class='nav-link active' style='color: white' href="category_admin.php">Kategorije</a>
           </li>
          

      

        </ul> 
 <form action="search_admin.php" class="form-inline">
    <input class="mr-sm-2 align-middle rounded" style="height: 44px;" name="search" type="search" placeholder="Pretraži" aria-label="Search">
    <button class="btn align-middle btn-outline-success my-2 my-sm-0" type="submit">Pretraži</button>
  </form>


      </div>
    </div>
  </nav>
  <br><br><br>


<h1 class="text-warning mb-3 border-bottom border-bottom-1 border-warning" style="text-align: center;">Naš izbor filmova</h1>

<?php 
 
  $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  $found = false;
  $query = "SELECT * FROM movies_1";
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
      
     
      echo "<div class='col-lg-2 offset-md-5 ml-5 mr-5 justify-content-center'>";
      echo "<div class='text-center justify-content-center'>";
      echo "<form  action='movies_admin.php'><input type='hidden' name='id' value=$id>";
      echo "<div class='card-body p-1'>";
      echo "<button type='submit' class='btn btn-danger unstyled-button'><img src='$img' type='submit' class='card-img-top mb-2' alt='cover photo'>";
      echo "$name</button>";
      echo "</form>";
      
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


</body>
</html>

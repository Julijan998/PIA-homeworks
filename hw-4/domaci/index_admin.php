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
<html>
<head>
  <title>Film-Klub</title>
   <link href="static/index.css" rel="stylesheet">
 
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
#dp{
  color: black;
}
.carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.carousel-control-prev-icon ::{
color: black;
}




</style>
</head>
<body style="background-color: #000; color: white;">
<?php 
$connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  
  $query = "SELECT * FROM admins";
  $res = mysqli_query($connection, $query);
  $found = true;
    
for($i = 0; $i < mysqli_num_rows($res); $i++)
{
  if(mysqli_num_rows($res) > 0){
    $row = mysqli_fetch_assoc($res);
    $name = $row['name'];
}
}  
 ?>
    
</div>
    
    <nav class="navbar fixed-top navbar-expand-lg pl-5 pr-5 navbar-dark bg-dark mb-0">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li>
        <div class="dropdown mr-5">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Korisnik
  </button>
  <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
    
    <p class="dropdown-item" ><?php  if (isset($_SESSION['username'])) : ?>
      <p class="nav-link text-center"><a style="text-decoration: none;" href="admin.php"><img style="height: 30px;" src="static/images/user-img.png"><strong class="text-warning"> <?php echo "$name"; ?></strong> </a>
      <?php endif ?>
    </p>
   <p>
     <a class="nav-link text-center text-white" style="text-decoration: none;" href="insert.php">Dodaj film</a>
   </p>
   <p>
     <a style="text-decoration: none;" class=" nav-link text-center text-white" href="delete_movies.php">Obrisi film</a>
   </p>
    <p>
    <a href="index.php?logout='1'" class="nav-link bg-danger rounded text-white text-center" style="text-decoration: none;">Odjavite se</a> </p> 

  </div>
</div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Početak<span class=""></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all-movies_admin.php">Filmovi</a>
      </li>
    </ul>

  <a class="navbar-brand justify-content-center" style="margin-right: 12%;" href="index_admin.php ">
    <img src="static/images/filmklub.png" alt="">
  </a>  
  
           <form action="search_admin.php" class="form-inline">
    <input class="mr-sm-2 align-middle rounded" style="height: 44px;" name="search" type="search" placeholder="Pretraži" aria-label="Search">
    <button class="btn align-middle btn-outline-success my-2 my-sm-0" type="submit">Pretraži</button>
  </form>
</nav>
  </div>
</nav>
  <br><br><br>
<br> 

<div>
  <div id="carouselExampleIndicators" class="carousel slide mt-0 mb-5" data-ride="carousel">
    
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: url('static/images/thumb-5f5a7d12e8e3f-12.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-1 text-left text-white "></h2>
          <p class="lead "></p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('static/images/dracula.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4"></h2>
          <p class="lead"></p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('static/images/maxresdefault1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4"></h2>
          <p class="lead"></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
  </div>
</div>

 <h2 class=" mb-1" >Naša preporuka</h2>

 <div style="margin-left: 5%; margin-right: 5%;" class="d-flex flex-wrap justify-content-center">
  
  <div class="order-3 p-2">
    <div class="card bg-dark">
  <a style="text-decoration: none;" href="http://localhost/domaci/movies_admin.php?id=1"><img class="mb-2" src="static/movies/image1.jpg" style="height: 400px;" alt="Deadpool" style="width:100%"><h1 id="dp" class="text-white">Deadpool</h1></a>
  
</div>

  </div>
  <div class="order-2 p-2">
    <div class="card bg-dark">
  <a style="text-decoration: none;" href="http://localhost/domaci/movies_admin.php?id=4"><img class="mb-2" src="static/movies/image4.jpg" style="height: 400px;" alt="Inception" style="width:100%"> <h1 id="dp" class="text-white">Inception</h1> </a>
  
</div>

  </div>
  <div class="order-1 p-2">
    <div class="card bg-dark">
 <a style="text-decoration: none;" href="http://localhost/domaci/movies_admin.php?id=17"> <img class="mb-2" src="static/movies/image17.jpg" style="height: 400px;" alt="Hangover" style="width:100%"><h1 id="dp" class="text-white">The Hangover</h1></a>
  
</div>

  </div>
  <div class="order-1 p-2">
    <div class="card bg-dark">
 <a style="text-decoration: none;" href="http://localhost/domaci/movies_admin.php?id=2"> <img class="mb-2" src="static/movies/image2.jpg" style="height: 400px;" alt="Joker" style="width:100%"><h1 id="dp" class="text-white">Joker</h1></a>
  
</div>

  </div>

</div>



 <h2 class="mt-5">Neki naši filmovi</h2><br>
  <div id="mtoprated"  class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"  style="height: 385px;">
      <?php

        // connect to the database
        $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
        $query = "SELECT * FROM movies_2";
        $res = mysqli_query($connection, $query);

        for($i = 0; $i < 12; $i++){
          $row = mysqli_fetch_assoc($res);
          $id = $row['id'];
          $img_name = 'image'.$id.'.jpg';

          if($id == 1){
            echo "<div class='carousel-item active'>";
            echo "<div class='container'>";
            echo "<div class='row'>";
          }
          else if($id == 5){
            echo "</div></div></div>";
            echo "<div class='carousel-item'>";
            echo "<div class='container'>";
            echo "<div class='row'>";
          }
          else if($id == 9){
            echo "</div></div></div>";
            echo "<div class='carousel-item'>";
            echo "<div class='container'>";
            echo "<div class='row'>";
          }
          echo "<div class='col-sm'>";
          echo "<form action='movies_admin.php'><input type='hidden' name='id' value=$id>";
          echo "<button type='submit' class='unstyled-button'><a href='#'>";
          echo "<img class='d-block w-100' src='static/movies/$img_name' alt='cover photo'>";
          echo "</a></button></form></div>";
        }
        echo "</div></div></div>";
      ?>
    </div>
    <a class="carousel-control-prev w-auto" href="#mtoprated" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next w-auto" href="#mtoprated" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
  <br><br>





<!-- footer -->

<footer class="bg-dark  text-lg-start">
  <div class=" p-1">
    <p class="text-center ml-5 pt-1">
      <img src="static/images/Film-Klub-logo.png" class="text-left mr-5" style="height: 70px;">
    <p class=" pt-2 border-top border-bottom-2 border-danger text-center">Januar 2021 - Julijan Stojanović</p>

  </div>
</footer>


  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>
</html>
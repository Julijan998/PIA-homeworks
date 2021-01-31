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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <title>Kategorije</title>
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

        </ul> 
 <form action="search_admin.php" class="form-inline">
    <input class="mr-sm-2 align-middle rounded" style="height: 44px;" name="search" type="search" placeholder="Pretraži" aria-label="Search">
    <button class="btn align-middle btn-outline-success my-2 my-sm-0" type="submit">Pretraži</button>
  </form>


      </div>
    </div>
  </nav>
  <br><br><br>
<?php
    
    echo "<h1 class='text-center text-danger mb-3'>Kategorije filmova</h1>";

    echo "<div class='container'><div class='row '>";
    echo "<div class='col'>";
    echo "<ul class='nav justify-content-center nav-tabs border-bottom border-bottom-1 border-warning' id='myTab' role='tablist'>";

    echo "<li class='ml-1 nav-item rounded-top bg-danger' role='presentation'>";
    echo "<a class='nav-link text-warning active' id='action-tab' data-toggle='tab' href='#action' role='tab' aria-controls='action' aria-selected='true'>Akcija</a>";
    echo "</li>";
    echo "<li class=' ml-1 nav-item rounded-top bg-danger' role='presentation'>";
    echo "<a class='nav-link text-warning ' id='sci-tab' data-toggle='tab' href='#sci-fi' role='tab' aria-controls='sci-fi' aria-selected='true'>Naucna Fantastika</a>";
    echo "</li>";
    echo "<li class='ml-1 nav-item rounded-top bg-danger' role='presentation'>";
    echo "<a class='nav-link text-warning ' id='horor-tab' data-toggle='tab' href='#horor' role='tab' aria-controls='horor' aria-selected='true'>Horor</a>";
    echo "</li>";
    echo "<li class='ml-1 rounded-top nav-item bg-danger' role='presentation'>";
    echo "<a class='nav-link text-warning' id='com-tab' data-toggle='tab' href='#comedy' role='tab' aria-controls='comedy' aria-selected='false'>Komedija</a>";
    echo "</li>";
    echo "</ul>";

    echo "<div class='tab-content mt-3' id='myTabContent'>";
    echo "<div class='tab-pane fade show active' id='action' role='tabpanel' aria-labelledby='action-tab'>";
      

  $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  $found = false;
  $query = "SELECT * FROM movies_1 WHERE genre IN ('action','action/drama','action/adventure','Action/Comedy/Crime','Action/Comedy/Adventure','Action/Adventure/Crime','Action/Crime','Action,Crime','Crime,Drama,Thriller')";
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
      

      echo "<div class='col-md-3 offset-md-1' >";
      echo "<div class='text-center justify-content-center'>";
      echo "<div class='card-body'>";
      echo "<form action='movies.php'><input type='hidden' name='id' value=$id>";

      echo "<button type='submit' class='btn text-white button-unstyled'><img src='$img' class='card-img-top' alt='cover photo'><p class='mt-2'>$name</p></button>
      </form>";

      echo "</div></div></div>";
    }
  }

  if($found)
    echo "</div></div></div></div><br>";

 echo "<div class='tab-pane fade' id='comedy' role='tabpanel' aria-labelledby='com-tab'>";

  $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  $found = false;
  $query = "SELECT * FROM movies_1 WHERE genre IN ('comedy','Adventure / Comedy' , 'Action/Comedy/Crime', 'Action/Comedy/Adventure')";
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
      

      echo "<div class='col-md-3 offset-md-0.5'>";
      echo "<div class='text-center justify-content-center'>";
      echo "<div class='card-body'>";
      echo "<form action='movies.php'><input type='hidden' name='id' value=$id>";

      echo "<button type='submit' class='btn text-white button-unstyled'><img  src='$img' class='card-img-top' alt='cover photo'><p class='mt-2'>$name</p></button>
      </form>";

      echo "</div></div></div>";
    }
  }

  if($found)
    echo "</div></div></div></div><br>";

 echo "<div class='tab-pane fade' id='sci-fi' role='tabpanel' aria-labelledby='sci-tab'>";

  $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  $found = false;
  $query = "SELECT * FROM movies_1 WHERE genre IN ('Action/Adventure/Sci-Fi','Adventure / Drama / sci-fi' , 'Action/Adventure/Sci-Fi')";
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
      

      echo "<div class='col-md-3 offset-md-0.5'>";
      echo "<div class='text-center justify-content-center'>";
      echo "<div class='card-body'>";
      echo "<form action='movies.php'><input type='hidden' name='id' value=$id>";

      echo "<button type='submit' class='btn text-white button-unstyled'><img  src='$img' class='card-img-top' alt='cover photo'><p class='mt-2'>$name</p></button>
      </form>";

      echo "</div></div></div>";
    }
  }

  if($found)
    echo "</div></div></div></div><br>";

   echo "<div class='tab-pane fade' id='horor' role='tabpanel' aria-labelledby='horor-tab'>";

  $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  $found = false;
  $query = "SELECT * FROM movies_1 WHERE genre IN ('horor')";
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
      echo "<form action='movies.php'><input type='hidden' name='id' value=$id>";

      echo "<button type='submit' class='btn text-white button-unstyled'><img  src='$img' class='card-img-top' alt='cover photo'><p class='mt-2'>$name</p></button>
      </form>";

      echo "</div></div></div>";
    }
  }

  if($found)
    echo "</div></div></div></div><br>";
?>


<footer class="bg-dark text-lg-start">
  <div>
    <p class="text-center ml-5">
      <img src="static/images/Film-Klub-logo.png" class="text-left mr-5" style="height: 70px;">
    <p class=" pt-1 border-top border-bottom-2 border-danger text-center">Januar 2021 - Julijan Stojanović</p>

  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>
</html>
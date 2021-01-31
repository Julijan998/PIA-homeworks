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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
  <link href="static/index.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <style>
    h2{
      text-align: center;
      padding: 20px;
    }

    img{
      margin-left: auto;
    }

    #myTab, #myTabContent{
      margin-left: -130px;
    }

    #myTab a{
      
      color: #fff;
    }
.right {
  float: right;
}

.left {
  float: left;
}

.rating .stars {
  margin-right: 15px;
}

.rating .stars .star {
  float: left;
  padding: 5px 2px;
  cursor: pointer;
}

.rating .stars .star:before {
  font-family: 'FontAwesome';
  content: '\f005';
  color: red;
  font-size: 2.1em;
}

.rating .stars .star:hover:before,
.rating .stars .star.to_rate:before,
.rating .stars .star.rated:before {
  color: gold;
}

.rating .stars .star.no_to_rate:before {
  color: red;
}
#radio{
  opacity: 0;
} 


  </style>

<title>Film</title>
</head>

<body style="background-color: #000; color: white;">


  <nav class="navbar fixed-top navbar-expand-lg pl-5 pr-5 navbar-dark border-bottom border-bottom-1 border-warning" style="background-color: black;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
      <li class="nav-item ">
            <?php  if (isset($_SESSION['username'])) : ?>
     <a href="index.php?logout='1'" class="nav-link bg-danger rounded text-white mr-2">Odjavite se</a>
    <?php endif ?>

      </li>

      <li class="nav-item active">
        <a class="nav-link text-secondary" href="index.php">Početak<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-secondary" href="all-movies.php">Filmovi</a>
      </li>

    </ul>

  <a class="navbar-brand" style="margin-right: 12%;" href="index.php">
    <img src="static/images/filmklub.png" alt="">
  </a> 
    <form action="search.php" class="form-inline">
    <input class="mr-sm-2 align-middle rounded" style="height: 44px;" name="search" type="search" placeholder="Pretraži" aria-label="Search">
    <button class="btn align-middle btn-outline-success my-2 my-sm-0" type="submit">Pretraži</button>
  </form>
</nav>
  </div>
</nav>
  <br><br><br>
<br><br>

 

  <?php

  $id = $_GET['id'];
  $image = 'image'.$id.'.jpg';
  $path = "static/movies/$image";

  $flag = 0;

  // connect to the database
  $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  
  $query = "SELECT * FROM movies_1 WHERE id = '$id'";
  $res = mysqli_query($connection, $query);

  if(mysqli_num_rows($res) > 0){
    $row = mysqli_fetch_assoc($res);
    $name = $row['name'];
    $genre = $row['genre'];
    $relase_date = $row['relase_date'];
    $duration = $row['duration'];
    $production = $row['production'];
    $director = $row['director'];
    $writer = $row['writer'];
    $cast = $row['cast'];
    $description = $row['description'];

    
    echo "<h1 class='text-center text-danger mb-3'>$name</h1>";

    echo "<div class='container '><div class='row '>";
    echo "<div class='col-8 col-sm-6 '>";
    echo "<img src='$path' style='width:350px;height:92%;' alt='cover photo'>";
    echo "</div> <div class='col-8 col-sm-6 '>";
    echo "<ul class='nav justify-content-end nav-tabs border-bottom border-bottom-1 border-warning' id='myTab' role='tablist'>";
    echo "<li class='nav-item rounded-top bg-danger' role='presentation'>";
    echo "<a class='nav-link text-warning active' id='home-tab' data-toggle='tab' href='#home' role='tab' aria-controls='home' aria-selected='true'>Detalji</a>";
    echo "</li>";
    echo "<li class='ml-1 rounded-top nav-item bg-danger' role='presentation'>";
    echo "<a class='nav-link text-warning' id='profile-tab' data-toggle='tab' href='#profile' role='tab' aria-controls='profile' aria-selected='false'>Opis i glumci</a>";
    echo "</li>";
     echo "</li>";
    echo "</ul>";
    echo "<div class='tab-content mt-3' id='myTabContent'>";
    echo "<div class='tab-pane fade show active' id='home' role='tabpanel' aria-labelledby='home-tab'>";
    echo "Producentska kuca:   $production<br>";
    echo "Režiser:   $director<br>";
    echo "Pisac:   $writer<br>";
    echo "Žanr:   $genre<br>";
    echo "Datum objave:   $relase_date<br>";
    echo "Trajanje filma:   $duration<br>";
echo "<br>";
    
  echo "<form class='border border-danger rounded w-100' action='static/movies/ratings.php' method='post'>";

  
echo"<h5 class=' text-center mt-2'>Kako vam se dopada film?</h5>";
echo"<div class='rating left row pl-3 text-center justify-content-center'>";
echo"<div class='stars right'>";

echo"<label>";
echo"<input id='radio' type='radio' name='stars' value='1'/>";
echo"<a style='text-decoration:none;'  class='star'>1</a>";
echo "</label><label>";
echo"<input id='radio' type='radio' name='stars' value='2'/>";
echo"<a style='text-decoration:none;'  class='star'>2</a>";
echo"</label><label>";
echo"<input id='radio' type='radio' name='stars' value='3'/>";
echo"<a style='text-decoration:none;'  class='star'>3</a>";echo"</label><label>";
echo"<input id='radio' type='radio' name='stars' value='4'/>";
echo"<a style='text-decoration:none;'  class='star'>4</a>";echo"</label><label>";
echo"<input id='radio' type='radio' name='stars' value='5'/>";
echo"<a style='text-decoration:none;'  class='star'>5</a>";echo"</label><label>";
echo"<input id='radio' type='radio' name='stars' value='6'/>";
echo"<a style='text-decoration:none;'  class='star'>6</a>";echo"</label><label>";
echo"<input id='radio' type='radio' name='stars' value='7'/>";
echo"<a style='text-decoration:none;'  class='star'>7</a>";echo"</label><label>";
echo"<input id='radio' type='radio' name='stars' value='8'/>";
echo"<a style='text-decoration:none;'  class='star'>8</a>";echo"</label><label>";
echo"<input id='radio' type='radio' name='stars' value='9'/>";
echo"<a style='text-decoration:none;'  class='star'>9</a>";echo"</label><label>";
echo"<input id='radio' type='radio' name='stars' value='10'/>";
echo"<a style='text-decoration:none;'  class='star'>10</a>";echo"</label><label>";

echo"</div>";
echo"</div><br><br><br>";


echo "<div class='row text-center '>";

echo   " <div class='text-center'>";
       if (isset($_SESSION['username'])) : ?>
      <p>Korisnik: <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif; 
echo "</div><br>";
     echo " <div class='text-center mb-2'>";
 echo"<button class='bg-warning' style='width: 250px;' type='submit' name='submit' value='$name'>Oceni </button> <br> </div>";
 
     echo "</form>";
    echo "</div>";
     echo"</div>";
    echo "<div class='tab-pane fade' id='profile' role='tabpanel' aria-labelledby='profile-tab'>";
    echo "Bitni glumci:<br> $cast <br>";

   
     echo "<br>";
    echo "Opis:<br>$description</div>";

  }
  else
    echo "<script>alert('Greska'); window.location = 'http://localhost/Domaci/php/index.php';</script>";

  ?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
  $('.rating .star').hover(function() {
    $(this).addClass('to_rate');
    $(this).parent().find('.star:lt(' + $(this).index() + ')').addClass('to_rate');
    $(this).parent().find('.star:gt(' + $(this).index() + ')').addClass('no_to_rate');
  }).mouseout(function() {
    $(this).parent().find('.star').removeClass('to_rate');
    $(this).parent().find('.star:gt(' + $(this).index() + ')').removeClass('no_to_rate');
  }).click(function() {
    $(this).removeClass('to_rate').addClass('rated');
    $(this).parent().find('.star:lt(' + $(this).index() + ')').removeClass('to_rate').addClass('rated');
    $(this).parent().find('.star:gt(' + $(this).index() + ')').removeClass('no_to_rate').removeClass('rated');
  });
});
</script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>
</html>

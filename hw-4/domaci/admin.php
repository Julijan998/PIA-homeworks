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
        <a class="nav-link text-secondary" href="index_admin.php">Početak<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-secondary" href="all-movies_admin.php">Filmovi</a>
      </li>

    </ul>

  <a class="navbar-brand justifu-content-center text-center" style="margin-right: 14%;" href="index_admin.php">
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
<br><br>

<?php

  $flag = 0;

  // connect to the database
  $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
  
  $query = "SELECT * FROM admins";
  $res = mysqli_query($connection, $query);

  if(mysqli_num_rows($res) > 0){
    $found = true;
    
for($i = 0; $i < mysqli_num_rows($res); $i++)
    $row = mysqli_fetch_assoc($res);
    $name = $row['name'];
    $username = $row['username'];
    $email = $row['email'];

 echo "<h1 class='text-center text-danger mb-3 mt-4 ml-5 mr-5 border-bottom border-bottom-1 border-warning'>Administrativni nalog</h1>";

 echo "<div class='container '><div class='row '>";
    echo "<div class='col-8 col-sm-6 '>";

 echo "<img style='height: 400px;' src='static/images/user-img.png'>";
echo "</div> <div class='col-8 col-sm-6 mt-5'>";
echo "<strong><p class= 'mt-5'>Ime:   $name<br></p></strong>";
    echo "<strong><p class= ''>Korisnicko ime:   $username<br></p></strong>";
    echo "<strong><p class= ''>E-mail:   $email<br></p></strong>";
    
    echo "</div>";
}
?>
</body></html>
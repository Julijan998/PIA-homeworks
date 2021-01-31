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

<?php
echo "<br><br><br>";

if(isset($_POST['delete']))
{

        $name=$_POST['name'];
        
    $connect = mysqli_connect('localhost', 'root', '', 'filmklub');
    $query = "DELETE FROM movies_1 WHERE name LIKE '%$name%'";
    $result = mysqli_query($connect, $query);
   
     if($result)
    { echo "<script>alert('Film je obrisan ');</script>";
     
    }else{
        echo "<script>alert('Film nije pronadjen u nasoj bazi podataka ');</script>";
     
    }
    mysqli_close($connect);

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
 
 <form action="search_admin.php" class="form-inline">
    <input class="mr-sm-2 align-middle rounded" style="height: 44px;" name="search" type="search" placeholder="Pretraži" aria-label="Search">
    <button class="btn align-middle btn-outline-success my-2 my-sm-0" type="submit">Pretraži</button>
  </form>

      </div>
    </div>
  </nav>
  <br><br><br>

<h2>Obrisite film</h2>
<form  action="delete_movies.php" method="post">
  <table class="text-center">
    <tr>
      <td>Ime filma:</td>
      <td><input type="text" name="name" id="name" ></td>
    </tr>
    <tr>
      <td><button name="delete" type="submit">Obrisi</button></td>
    </tr>
  </table>
</form>

</body>
</html> 


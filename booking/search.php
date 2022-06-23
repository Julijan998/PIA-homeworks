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


.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-skype {
  background: #00aff0;
  color: white;
}
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
border-radius: 50%;
}
  </style>

  <title>Pretraga</title>
</head>
<body style="background-color: lightblue; color: white;">





   <nav class="navbar fixed-top navbar-expand-lg pl-5 pr-5 mb-0 justify-content-center" style="background-color: #0080ff; justify-content: center;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mt-lg-0">
   
     <li class="nav-item text-warning ml-3 mr-2 text-center" >
        
      </li>
      
      
      <li class="nav-item text-warning ml-3 mr-2 text-center" >
        <a class="nav-link text-center text-warning border-bottom border-white" style="font-size: 25px;" href="index.php"><span style="content: '\2190'; font-size: 35px;">&larr;</span>
      Vrati se na pocetak</a>
      </li>
       <!--
      <li class="nav-item text-warning mr-2 text-center">
        <a class="nav-link text-warning text-center border-bottom border-white" style=" font-size: 25px;" href="destinacije_admin.php">Destinacije</a>
      </li>

      <li class="nav-item mr-5 text-warning text-center">
        <a class="nav-link text-warning text-center border-bottom border-white" style="font-size: 25px;" href="#">Hoteli</a>
      </li>-->

</ul>
 </div>


</nav>
  </div>

  <br><br><br>
<br> 
<br>  <?php

  $search = $_GET['search'];
  echo "<h2 class='border-bottom border-bottom-1 border-success text-success mr-5 ml-5'>Rezultat pretrage: $search</h2>";

  // connect to the database
  $connection = mysqli_connect('localhost', 'root', '', 'j&m');
  $found = false;
  $query = "SELECT * FROM apartmani WHERE mesto LIKE '%$search%' ORDER BY mesto";
  $res = mysqli_query($connection, $query);
  if(mysqli_num_rows($res) > 0){
    $found = true;
    echo "<div class='container-fluid'>";
    echo "<div class='row'><div class='row gy-4'>";
    for($i = 0; $i < mysqli_num_rows($res); $i++){
      $row = mysqli_fetch_assoc($res);
      $id = $row['id'];
      $name = $row['ime'];
      $img = "static/smestaj/image".$id.".jpg";
      

      echo "<div class='col-md-3'>";
      echo "<div class='text-center justify-content-center'>";
      echo "<div class='card-body card-img-top' style='background-color: lightblue;'>";
      echo "<form action='hotel.php'><input type='hidden' name='id' value=$id>";

      echo "<button type='submit' class='btn'><img  src='$img' class='card-img-top' alt='cover photo'></button>
      </form>";

      echo "<h5 class='card-title mt-2 text-success'>$name</h5>";
      echo "</div></div></div>";
    }
  }

  if($found)
    echo "</div></div></div></div><br>";
  else
    echo "<script>alert('Ime filma koji ste uneli nije pronadjen na sajtu.'); window.location = window.history.back();</script>";

  ?>

<!-- footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<footer class="text-lg-start pt-1" style="background-color: #056088;">

<div class="container text-center">
  <div class="row">
    <div class="col-sm">
      Kontakt:<br>E-mail: j&m@gmail.com<br> Adresa: Radnicka <br> Telefon: +3456789 
    </div>

    <div class="col-sm mt-2">
      <a href="#" class="fa fa-facebook rounded"></a>
<a href="#" class="fa fa-twitter rounded"></a>
<a href="#" class="fa fa-youtube rounded"></a>
<a href="#" class="fa fa-google rounded"></a>
<a href="#" class="fa fa-instagram rounded"></a>
    </div>
    <div class="col-sm">
      Julijan Stojanović<br>Miloš Stevanović<br>April 2021.
    </div>

  </div>
</div>

<!--  <div class=" p-1">
    <p class="text-center ml-5 pt-1">
      <img src="static/images/Film-Klub-logo.png" class="text-left mr-5" style="height: 70px;">
    <p class=" pt-2 border-top border-bottom-2 border-danger text-center">April 2021 <br> Julijan Stojanović <br>Miloš Stevanovic</p>

  </div>-->
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>
</html>

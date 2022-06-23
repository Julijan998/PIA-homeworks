<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    header('location: ../index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../index.php");
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


.prijava{
  list-style: none;
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
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <title>Hoteli</title>
</head>
<body style="background-color: lightblue; color: white;">

  
<nav class="navbar fixed-top navbar-expand-lg pl-5 pr-5 mb-0 justify-content-center" style="background-color: #0080ff;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <ul class="navbar-nav mt-lg-0">
 

 <li><a  href="index.php"><img src="img/logo10.png" style="padding-right: 12px; "></a></li>
   <li class="nav-item text-warning ml-3 mr-2 text-center" >
     <a class="nav-link text-center text-white border-bottom border-white" style="font-size: 25px;" href="index.php">Početak</a>
   </li>
   <li class="nav-item text-warning mr-2 text-center">
     <a class="nav-link text-white text-center border-bottom border-white" style=" font-size: 25px;" href="destinacije.php">Destinacije</a>
   </li>

   <li class="nav-item mr-5 text-warning text-center">
     <a class="nav-link text-white text-center border-bottom border-white" style="font-size: 25px;" href="hoteli.php">Hoteli</a>
   </li>
 


<!--<li class="list-group-item" ><a href="#">Prijavi se</a></li>
<li class="list-group-item" ><a href="#">Registruj se</a></li>
--></ul>
<div class="container">
<ul class="row prijava mt-3">

<li class=" col" ><a href="#"></a></li>



<li class="col mr-2 text-center rounded p-1  bg-white unstyled-button" >
<?php  if (isset($_SESSION['username'])) : ?>
<a class="text-blue" style="text-decoration: none;" href="login.php">Prijavi se</a></li>
<?php endif ?>
</ul>
</div>


</nav>
  </div>
</nav>
  <br><br><br>
<br> 




<h1 class="text-success mb-3 border-bottom border-bottom-1 border-success" style="text-align: center;">Hoteli</h1>

<?php 
 
  $connection = mysqli_connect('localhost', 'root', '', 'j&m');
  $found = false;
  $query = "SELECT * FROM apartmani";
  $res = mysqli_query($connection, $query);
  if(mysqli_num_rows($res) > 0){
    $found = true;
   echo "<div class='container-fluid'>";
   echo "<div class='row'><div class='row gy-4'>";
   for($i = 0; $i < mysqli_num_rows($res); $i++){
    $row = mysqli_fetch_assoc($res);
    $id = $row['id'];
    $name = $row['ime'];
    $mesto = $row['mesto'];
    $img = "static/smestaj/image".$id.".jpg";
      
     
  echo "<div class='col-lg-2 offset-md-5 ml-5 mr-5 justify-content-center'>";
    echo "<div class='text-center justify-content-center'>";
  echo "<form class=' bg-info rounded' action='hotel.php'><input type='hidden' name='id' value=$id>";
    echo "<div class='card-body'>";
   echo "<button type='submit' class='btn btn-danger unstyled-button pb-2 rounded'><img src='$img' type='submit' class='card-img-top mb-2 p-1' alt='cover photo'>";
   echo "$name <br>"; 
   echo " $mesto <br>"; 
 // echo "Tip: $soba <br>";
 // echo "Broj kreveta: $krevet <br>";
 // echo "Wifi? $wifi <br>";
 // echo "Parking? $parking <br>";
//  echo "Cena po danu: $cena e";


  echo "</button>";

 echo "</form>";
      
  echo "</div></div></div>";
}
}

if($found)
echo "</div></div></div></div><br>";
else
echo "<script>alert('Dogodila se greska, probajte ponovo!'); window.location = window.history.back();</script>";

?>



<!-- footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<footer class="text-lg-start pt-1" style="background-color: #0080ff;">

<div class="container text-center">
  <div class="row">
    
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
</footer>


</body>
</html>

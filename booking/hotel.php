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

  .unstyled-button {
      border: none;
      padding: 0;
      background: none;
      }

      .row div{
        padding: 5px;
      }

      h2{
        text-align: center;
      }
body{
 /* margin-left: 7%;
  margin-right: 7%;
 justify-content: center;
*/}
h1{
  margin-left: 10%;
  margin-right: 10%;
  text-align: center;
}     


.prijava{
  list-style: none;
}

    /*#myTab, #myTabContent{
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
}*/
/*
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
  


.prijava{
  list-style: none;
}*/


  footer {
    background-color:#0080ff;
    /*background-color:  #2d2d30;*/
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
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

<title>Hotel</title>
</head>

<body style="background-color: lightblue; color: white;">

  
<nav class="navbar fixed-top navbar-expand-lg pl-5 pr-5 mb-0 justify-content-center" style="background-color: #0080ff;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <ul class="navbar-nav mt-lg-0">
 

 <li><a  href="user.php"><img src="img/logo10.png" style="padding-right: 12px; "></a></li>
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


<!--
<li class="col mr-2 text-center rounded p-4  bg-white unstyled-button" >
<?php  if (isset($_SESSION['username'])) : ?>
<a class=""  style="text-decoration: none; color: black;" href="../index.php?logout='1'">Odjavite se</a></li>
<?php endif ?>
</ul>
</div>
-->

</nav>
  </div>
</nav>

  

 

  <?php

  $id = $_GET['id'];
  $image = 'image'.$id.'.jpg';
  $path = "static/smestaj/$image";

  $flag = 0;

  // connect to the database
  $connection = mysqli_connect('localhost', 'root', '', 'j&m');
  
  $query = "SELECT * FROM apartmani WHERE id = '$id'";
  $res = mysqli_query($connection, $query);

  if(mysqli_num_rows($res) > 0){
    $row = mysqli_fetch_assoc($res);
    $ime = $row['ime'];
    $mesto = $row['mesto'];
    
    echo "<h1 style='margin-top: 5%;' class='text-center text-success border-bottom border-bottom-1 border-success mr-5 ml-5 mb-5'>$ime</h1>";
/*
    echo "<div class='container mt-5 '><div class='row '>";
    echo "<div class='col-8 col-sm-6 '>";
    echo "<img src='$path'  style='width:450px;height:100%;' alt='cover photo'>";
    echo "</div> <div class='col-8 col-sm-6 '>";
    echo "<ul class='nav justify-content-center w-100 nav-tabs border-bottom border-bottom-1 border-success ml-1 pr-2' id='myTab' role='tablist'>";
    echo "<li class='nav-item rounded-top bg-info w-100 text-center' role='presentation'>";
    echo "<a class='nav-link text-success' id='home-tab' data-toggle='tab' href='#home' role='tab' aria-controls='home' aria-selected='true'>Detalji</a>";
    echo "</li>";
    echo "</ul>";
    echo "<div class='tab-content mt-3 ' id='myTabContent'>";
    echo "<div class='tab-pane fade show active text-center text-success ml-5 pl-5' id='home' role='tabpanel'>";
    echo "Mesto:   $mesto<br>";
    echo "soba:   $soba<br>";
    echo "Broj kreveta:   $br_kreveta<br>";
    echo "Maksimalan broj osoba:   $max_osoba<br>";
    echo "Internet:   $wifi<br>";
    echo "Parking:   $parking<br>";
    echo "Cena:   $cena e po danu<br>";
echo "<br>";
echo "<a href='login.php' class='text-success' style='font-size:30px;'>Prijavite se da bi mogli da rezervisete!</a>";
    
    echo "</div>";
    echo "</div>";

    echo "</div>";
     echo"</div>";
  
 */}
  else
    echo "<script>alert('Greska'); window.location = 'http://localhost/domm/index.php';</script>";

  ?>
<?php 

/*
  echo "<form class='border-bottom border-success rounded w-100 mt-5' action='static/movies/ratings.php' method='post'>";

  
echo"<h5 class=' text-center mt-2 text-success'>Ocenite smestaj</h5>";
echo"<div class='rating left row pl-3 text-center justify-content-center'>";
echo"<div class='stars right text-center justify-content-center'>";
echo "<div class='justify-content-center ml-5 pl-5'>";
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
echo"</div>";

 echo"<button class='bg-warning ml-5 pr-2 ' style='width: 250px;' type='submit' name='submit' value='$ime'>Oceni </button> <br> </div>";

echo"</div><br><br><br>";


echo "<div class='row '>";

echo "</div><br>";
     echo "</form>";
*/
 ?>
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="assets/wow/animate.css" />



<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />



 <div class="container">

<div class="row">
  <?php

  $id = $_GET['id'];
  //$mesto = $_GET['ime'];
  $image = 'H'.$id.'.jpg';
  $path = "rooms/$image";

  $flag = 0;

    require_once('db.php');
    $q = "SELECT * FROM rooms WHERE hotel = '$ime' ORDER BY rooms.id ASC";
    /* $q = "SELECT * FROM rooms where $ime = $name ORDER BY rooms.id ASC";
     */  /* ovo $name je kad napravis tabel i stavis naziv hotela, $ime je naziv hotela koji je ucitan, i iskoristen kao naslov*/
    $run = mysqli_query($con, $q);
    $count = 0;
    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_array($run)){
  ?>
  <div  class="col-sm-6 wowload fadeInUp ">
      <div class="rooms">
          <img src="rooms/<?php echo $row['image1']; ?>" class="img-responsive">
          <div class="info">
              
              <h3><?php echo $row['title']; ?></h3>
              
              <p style="color: darkgreen;"> Kvadratura: <?php echo $row['size']; ?> m&sup2 <br> Cena za noc: <?php echo $row['price']; ?> dinara</p>
              <a href="room-details.php?id=<?php echo $row['id']; ?>" class="btn btn-default">Dodatne informacije</a>
          </div>
      </div>
  </div>
  <?php
        }
    }
  ?>
  
  
</div>


</div>
<!--
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
-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

<!-- footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<footer style="width: 100%;">
  
  <div class="row text-center">

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

</footer>


<style type="text/css">
  
  .nav-item:hover{
  text-decoration: none;  
  }
</style>

</body>
</html>
<!--
  echo "<form class='border border-danger rounded w-100' action='static/movies/ratings.php' method='post'>";

  
echo"<h5 class=' text-center mt-2'>Ocenite smestaj</h5>";
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
      <p>Korisnik: <strong><?php// echo $_SESSION['username']; ?></strong></p>
    <?php //endif; 
//echo "</div><br>";
  //   echo "</form>";-->
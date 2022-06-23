<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
   
   <!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

<!-- animate.css --> 
<link rel="stylesheet" href="assets/wow/animate.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">



<link rel="stylesheet" href="assets/style.css">

  <title>Apartman</title>
</head>

<style type="text/css">
    .unstyled-button {
      border: none;
      padding: 0;
      background: none;
      }

      .prijava{
  list-style: none;
}



</style>
<body style="background-color: lightblue; color: white;">

  
<nav class="navbar fixed-top navbar-expand-lg pl-5 pr-5 mb-0 justify-content-center" style="background-color: #0080ff;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <ul class="navbar-nav mt-lg-0 unstyled-button">
 

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


<!--
<li class="col mr-2 text-center rounded p-4  bg-white unstyled-button" >
<?php  if (isset($_SESSION['username'])) : ?>
<a class=""  style="text-decoration: none;" href="../index.php?logout='1'">Odjavite se</a></li>
<?php endif ?>-->
</ul>
</div>


</nav>
  </div>
</nav>




<?php
    require_once('db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = "SELECT * FROM rooms WHERE rooms.id = $id";
        $run = mysqli_query($con, $q);
        $row = mysqli_fetch_array($run);
    }
?>





<div class="container" style="margin-top: 5%;">
<h1 class="title text-center"><?php echo $row['title']; ?></h1>
 <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="rooms/<?php echo $row['image1']; ?>" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="rooms/<?php echo $row['image2']; ?>"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="rooms/<?php echo $row['image3']; ?>"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="rooms/<?php echo $row['image4']; ?>"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
  <!-- RoomCarousel-->


<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p><?php echo $row['description']; ?></p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Vecina apartmana naseg hotela poseduje</h3>    
    <ul>
      <li>Televiziju sa preko 100 kanala</li>
      <li>Sirokopojasni internet velike brzine</li>
      <li>Terasu</li>
      <li>Ciscenje svakog dana</li>
      <li>Cistu posteljinu i peskire</li><br><br><br>
      <div class="text-center rounded bg-danger p-4">
        <a href="login.php" class="text-white p-1">Rezervisite odmah!</a></div>
       </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Velicina<span><?php echo $row['size']; ?> m&sup2</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Cena/nocenje<span><?php echo $row['price']; ?> rsd</span></div>
    </div>
  </div>
</div>
                     


</div>




<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>
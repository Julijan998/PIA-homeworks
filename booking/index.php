<!DOCTYPE html>
<html>
<head>
  <title>J&M</title>
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

<style>



.overlay{
    background: url(img/hero_1.jpg) , linear-gradient( #acbbff, #f8b858 ) no-repeat;   /*#0098a1, #0098a1 */
    background-size: auto;
    background-position: center;
    background-attachment: fixed;
    background-blend-mode: multiply;
    height: 800px;
    
    margin-bottom: 30px;


  }

  .overlay .heading {
    color: #fff;
    margin-bottom: 20px;
    
  
  }

  @media (max-width: 650px) {
    .overlay .heading {
      font-size: 25px; /* smanjuje karosel kada je velicina manja od  600 piksela */
      margin-bottom: 10px;
    }
  }



  
    

  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
    
    
  }
  h3, h4 {
    margin: 10px 0 50px 0;
    letter-spacing: 11px;      
    font-size: 60px;
    color: #111;
    position: sticky;
  }
  h5 {
      margin-bottom: 150px;
      font-size: 25px;
  }

  
  .container {
    padding: 20px 120px;
  }
  
  
  

  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
  
    width: 100%; 
   
  }
  .carousel-caption h3 {
    color: #fff !important;
    margin-bottom: 10px;
  }
  .carousel-indicators{
    margin-bottom: 90px;   /*indikaori za levo-desno*/
  }
  @media (max-width: 800px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: rgb(222, 229, 253);
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 400px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  .flip-card {
  background-color: transparent;
  width: 300px;
  height: 400px;
  perspective: 1000px;
  margin-bottom: 20px;
  
}

.flip-card-inner {
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;

  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
/*  background-color: bbb;*/
background- background-color:#0080ff;
  color: rgb(52, 59, 63);
  
}

.flip-card-back {
 /* background-color: #d6696f;*/
  background-color:#0080ff;
  color: rgb(236, 238, 240);
  transform: rotateY(180deg);
}
  
  
  .btn {
    padding: 10px 20px;
    background-color: #333;
   
    color: rgb(238, 229, 229);
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid rgb(120, 126, 214);
  /*  background-color: rgb(130, 152, 226);*/
    background-color:#0080ff;
    color: #111;
  }
  
 
  .nav-tabs li a {
    color: #777;
  }
  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
   /* background-color: rgb(25, 25, 26);*/
   background-color:#0080ff;
    border: 0;
    font-size: 10px !important;   /*ako povecam slova onda responise ne radi lepo*/
    letter-spacing: 4px;
    opacity: 1.0;
    padding: 10px;
  }
  


  .navbar li a, .navbar  {  /*.navbar-brand  ubaci levo ako nece nesto*/
    color: #d5d5d5 !important;
    
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
/*proveri ove 3 klase da li sve 3 treba*/
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  
  

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
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }

  video{
    margin-left: 30px;
  }
  </style> 
</head>


<body style="background-color: lightblue; color: white;" >
<?php 
$connection = mysqli_connect('localhost', 'root', '', 'j&m');
  
  $query = "SELECT * FROM users";
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
 

 <nav class="navbar navbar-default navbar-fixed-top" style="opacity: 0.8;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <!--   <a class="navbar-brand" href="#"><img src="img/logo10.png" style="margin: auto;"></a>  -->
   <a  href="#"><img src="img/logo10.png" style="padding-right: 12px; "></a></li>  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php">POCETAK</a></li>
        <li><a href="destinacije.php">DESTINACIJE</a></li>
        <li><a href="hoteli.php">HOTELI</a></li>      
           
      </ul>
    
     
    <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>PRIJAVA</a></li>
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span>REGISTRACIJA</a></li>
      </ul>
 

    </div>
  </div>
</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/bgd.jpg" alt="" width="1200" height="500">
        <div class="carousel-caption">
          <h3>BEOGRAD</h3>
          <h5>Noćni provod je nezaboravan</h5>
        </div>      
      </div>

      <div class="item">
        <img src="img/tara1.jpg" alt="" width="1200" height="500">
        <div class="carousel-caption">
          <h3>TARA</h3>
          <h5>Užitak uz prelepe poglede sa brojnih vidikovaca</h5>
        </div>      
      </div>
    
      <div class="item">
        <img src="img/zlatibor.jpg" alt="" width="1200" height="500">
        <div class="carousel-caption">
          <h3>ZLATIBOR</h3>
          <h5>Čist vazduh, mir i tišina - Odmor za dusu</h5>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<br><br>
           <form action="search.php" class="text-center" >
    <p class="text-center" style="font-size: 30px;">Unesite mesto u kome tražite smestaj</p>
    <input class="align-middle rounded" style="height: 44px; width: 70%; color: black;" name="search" type="search" placeholder="Pretraži" aria-label="Search">
    <button class="btn align-middle btn-outline-success" type="submit">Pretraži</button>
  </form>
  <br><br><br>




  




<!-- Container (The Band Section) -->









<!-- Container (TOUR Section)  -->

<div class="bg-1">
  <div class="container" >
    <h3 class="text-center">Top ponuda</h3>
    <div class="row text-center">
    
    <div class="col-sm-4">
    <div class="flip-card mr-1 mt-4 ">
      <div class="flip-card-inner">
        <div class="flip-card-front">
         <a style="text-decoration: none;" href="#"><img class="mb-2" src="img/zlatibor1.jpg"  alt="Zlatibor" ></a>
        </div>
        <div class="flip-card-back">
          <h1 class="mt-5 mb-3">Zlatibor</h1>  
          <a class="text-white  rounded p-1 btn" style="text-decoration: none;" href="static/mesta/Zlatibor.php">Rezervisite Odmah!</a>
        </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4">
    <div class="flip-card mr-1 mt-4 ">
      <div class="flip-card-inner">
        <div class="flip-card-front">
         <a style="text-decoration: none;" href="#"><img class="mb-2" src="img/vbanja.jpg"  alt="Vrnjacka Banja" ></a>
        </div>
        <div class="flip-card-back">
          <h1 class="mt-5 mb-3">Vrnjacka Banja</h1>  
          <a class="text-white  rounded p-1 btn" style="text-decoration: none;" href="static/mesta/vrbanja.php">Rezervisite Odmah!</a>
        </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="flip-card mr-1 mt-4 ">
        <div class="flip-card-inner">
          <div class="flip-card-front">
           <a style="text-decoration: none;" href="#"><img class="mb-2" src="img/tara2.jpg"  alt="Tara " ></a>
          </div>
          <div class="flip-card-back">
            <h1 class="mt-5 mb-3">Tara</h1>  
            <a class="text-white  rounded p-1 btn" style="text-decoration: none;" href="static/mesta/tara.php">Rezervisite Odmah!</a>
          </div>
          </div>
        </div>
      </div>
      

    </div>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="flip-card mr-1 mt-4 ">
          <div class="flip-card-inner">
            <div class="flip-card-front">
             <a style="text-decoration: none;" href="#"><img class="mb-2" src="img/kopaonik1.jpg"  alt="Kopaonik" ></a>
            </div>
            <div class="flip-card-back">
              <h1 class="mt-5 mb-3">Kopaonik</h1>  
              <a class="text-white  rounded p-1 btn" style="text-decoration: none;" href="static/mesta/Kopaonik.php">Rezervisite Odmah!</a>
            </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="flip-card mr-1 mt-4 ">
            <div class="flip-card-inner">
              <div class="flip-card-front">
               <a style="text-decoration: none;" href="#"><img class="mb-2" src="img/golubac.jpg"  alt="Golubac" ></a>
              </div>
              <div class="flip-card-back">
                <h1 class="mt-5 mb-3">Golubac</h1>  
                <a class="text-white  rounded p-1 btn" style="text-decoration: none;" href="static/mesta/Golubac.php">Rezervisite Odmah!</a>
              </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="flip-card mr-1 mt-4 ">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                 <a style="text-decoration: none;" href="#"><img class="mb-2" src="img/sokobanja.jpg"  alt="Sokobanja" ></a>
                </div>
                <div class="flip-card-back">
                  <h1 class="mt-5 mb-3">Sokobanja</h1>  
                  <a class="text-white  rounded p-1 btn" style="text-decoration: none;" href="static/mesta/Sbanja.php">Rezervisite Odmah!</a>
                </div>
                </div>
              </div>
            </div>
          </div>
          
            
  </div>
</div>


<br>
  <br>

  <div class="row">  <!--ako dodam text-center centrirace mi video-->
    
    <div > <!--class="container text-right"-->
     <div class="col-sm-6 text-right" >
      <h3>O NAMA</h3>
      <p><em>Volimo putovanja!</em></p>
      
      <p>J&M booking je osnovan 2019.godine u Kragujevcu I od male kompanije postao je jedna od vodećih kompanija u oblasti putovanja u Srbiji.
        Ulaganjem u razvoj tehnologija koje će putovanja uciniti što lakšim, J&M booking povezuje veliki broj putnika sa nezaboravnim iskustvima,velikim izborom turističkih destinacija I neverovatnih mesta za boravak – od privatnih smeštaja do hotela I još mnogo toga.
        J&M booking nudi veliki broj smeštajnih jedinica,uključujući jedinice koje čine privatni smeštaj,apartmani I druga jedinstvena mesta za boravak. Bez obzira na to gde želite da idete ili šta želite da radite, mi to činimo jednostavnim I pruzamo sveobuhvatnu korisničku podršku koja je dostupna u svako doba dana.</p>
      
    </div>
    </div>

    <div class="col-sm-6 ">

  
        <section >    <!--class="justify-content-center mt-5 intro-video-section set-bg d-flex"-->
        <video width="90%" height="70%"  controls>
        <source src="img/serbia.mp4" type="video/mp4">
        </video>
        </section>
      </div>
  </div>

    <br>  
    <br>
    <br>

<section id="overlay" class="overlay">
   <h1 class="heading">Pridruži nam se i putuj sa nama</h1>

    <!---->
    <div class="container">

      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-10">
          <div class="heading-39101 mb-5">
            <span class="backdrop text-center">Kontaktiraj</span>
            
            <h3 class="heading">Kontaktiraj nas</h3>
          </div>
        </div>
      </div>
     
      <div class="row ">
        <div class="col-lg-8 mb-5" >
         
          <form action="reg_log.php" method="post">
            <div class="form-group row">
              <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" class="form-control" name="ime" placeholder="Ime">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="prezime" placeholder="Prezime">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" class="form-control" name="email" placeholder="Email adresa">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
               <input type="text" name="poruka" id="poruka" cols="30" rows="10" style="width: 610px; height: 150px; color: black;" placeholder="Unesite vas komentar"><!-- <textarea name="" id="" class="form-control" name="poruka" placeholder="Unesite svoju primedbu" cols="30" rows="10"></textarea> -->
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mr-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Pošalji poruku" name="posalji"> 
              </div>
            </div>
          </form>
        </div>
       
      </div>
      
    </div>
  </div>
  




<!---->
</section>


    



<!--
 <h2 class="mt-5">Neki naši filmovi</h2><br>
  <div id="mtoprated"  class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"  style="height: 385px;">
      

        // connect to the database
 //       $connection = mysqli_connect('localhost', 'root', '', 'filmklub');
   //     $query = "SELECT * FROM movies_2";
     //   $res = mysqli_query($connection, $query);

       // for($i = 0; $i < 12; $i++){
//          $row = mysqli_fetch_assoc($res);
  //        $id = $row['id'];
    //      $img_name = 'image'.$id.'.jpg';

      //    if($id == 1){
          //  echo "<div class='carousel-item active'>";
        //    echo "<div class='container'>";
        //    echo "<div class='row'>";
   //       }
       //   else if($id == 5){
       //     echo "</div></div></div>";
        //    echo "<div class='carousel-item'>";
        //    echo "<div class='container'>";
        //    echo "<div class='row'>";
         // }
        //  else if($id == 9){
        //    echo "</div></div></div>";
        //    echo "<div class='carousel-item'>";
        //    echo "<div class='container'>";
        //    echo "<div class='row'>";
        //  }
       //   echo "<div class='col-sm'>";
       //   echo "<form action='movies.php'><input type='hidden' name='id' value=$id>";
       //   echo "<button type='submit' class='unstyled-button'><a href='#'>";
       //   echo "<img class='d-block w-100' src='static/movies/$img_name' alt='cover photo'>";
       //   echo "</a></button></form></div>";
        //}
      //  echo "</div></div></div>";
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
-->
<!--
  <section class="featured-section bg-danger">
    <div class="featured-bg set-bg" data-setbg="static/images/user-img.png"></div>
    <div class="featured-box">
      <div class="text-box">
        <div class="top-meta">MESTO NAJBOLJIH FILMOVA</div>
        <h3>IMDB - uvek uz vas</h3>
        <p>IMDb (Internet Movie Database, srp. Filmska internet baza podataka) američki je veb-sajt koji poseduje bazu podataka o svim poznatijim filmskim i televizijskim ličnostima, filmovima, televizijskim emisijama, serijama, reklamama i video-igrama. Internet gigant Amazon je aprila 1998. godine kupio IMDb, a 2002. godine mu je proširena funkcionalnost tako što je dodat IMDbPro, čije se korišćenje naplaćuje.<br><br>

Na lokaciji se nalaze spiskovi 250 najboljih filmova i 100 najlošijih filmova svih vremena, a zasnivaju se isključivo na ocenama redovnih korisnika ove lokacije.</p>
      </div>
    </div>
  </section>
  
-->


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

</footer>


  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>
</html>
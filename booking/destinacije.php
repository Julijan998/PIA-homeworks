<style type="text/css">
  

.prijava{
  list-style: none;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">

 <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  

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
  margin-bottom:5%;
}     





    .backdrop{
      text-shadow: #6b1217;
      font-family: 'Courier New', Courier, monospace;
      font-weight: bold;
      font-size: 50px   ;
      color: #ffffff;
      opacity: 0.5;
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

  
  
  
  

  
 
  }
  

  .column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
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
    background-color: rgb(130, 152, 226);
    color: #000;
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
    color: #f5f5f5;
    padding: 32px;
    margin-top:20px;
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

.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 20px;
  align-items: center;
  margin-left:3%;
  margin-right:3%;
  
  }
.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
}
.grid > article img {
  max-width: 100%;
}
.text {
  padding: 0 20px 20px;
}
.text > button {
  background: gray;
  border: 0;
  color: white;
  padding: 10px;
  width: 100%;
  }

  
  </style> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <title>Destinacije</title>
</head>

<body style="background-color: lightblue; color: white;">

<nav class="navbar navbar-default navbar-fixed-top">
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
  
  <br><br><br>
<br> 
<br>
<br> 

<h1 class="text-warning mb-3 mt-3 border-bottom border-bottom-1 border-warning" style="text-align: center;">Naš izbor destinacija</h1>
<!--
<?php 
 
 // $connection = mysqli_connect('localhost', 'root', '', 'j&m');
//  $found = false;
//  $query = "SELECT * FROM destinacije";
//  $res = mysqli_query($connection, $query);
//  if(mysqli_num_rows($res) > 0){
 //   $found = true;
 //   echo "<div class='container-fluid'>";
 //   echo "<div class='row'><div class='row gy-4'>";
 //   for($i = 0; $i < mysqli_num_rows($res); $i++){
 //     $row = mysqli_fetch_assoc($res);
 //     $id = $row['id'];
 //     $name = $row['name'];
 //     $img = "static/movies/images".$id.".jpg";
      
     
   //   echo "<div class='col-lg-2 offset-md-5 ml-5 mr-5 justify-content-center'>";
    //  echo "<div class='text-center justify-content-center'>";
  //    echo "<form  action='movies.php'><input type='hidden' name='id' value=$id>";
    //  echo "<div class='card-body p-1'>";
   //   echo "<button type='submit' class='btn btn-warning unstyled-button text-success'><img src='$img' type='submit' class='card-img-top mb-2' alt='cover photo'>";
    //  echo "$name</button>";
    //  echo "</form>";
      
  //  echo "</div></div></div>";
  // }
 // }

 //if($found)
   //echo "</div></div></div></div><br>";
  //else
    //echo "<script>alert('Ime filma koji ste uneli nije pronadjen na sajtu.'); window.location = window.history.back();</script>";

  ?>-->
  <div class="grid">
  <article>
    <img src="static/movies/images1.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/zlatibor.php" class="text-center text-white" style="font-size: 24px;">Zlatibor</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images2.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/tara.php" class="text-center text-white" style="font-size: 24px;">Tara</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images3.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/Kopaonik.php" class="text-center text-white" style="font-size: 24px;">Kopaonik</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images4.jpg" alt="Sample photo">
    <div class="text">
      <a href="static/mesta/Beograd.php" class="text-center text-white" style="font-size: 24px;">Beograd</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images5.jpg" alt="Sample photo">
    <div class="text"> <a href="static/mesta/Golubac.php" class="text-center text-white" style="font-size: 24px;">Golubac</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images6.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/vrbanja.php" class="text-center text-white" style="font-size: 23px;">Vrnjacka Banja</a>
    </div>
  </article>

<article>
    <img src="static/movies/images7.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/Sbanja.php" class="text-center text-white" style="font-size: 24px;">Sokobanja</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images8.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/Vrelo.php" class="text-center text-white" style="font-size: 24px;">Krupanj</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images9.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/NS.php" class="text-center text-white" style="font-size: 24px;">Novi Sad</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images10.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/divcibare.php" class="text-center text-white" style="font-size: 24px;">Divcibare</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images11.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/bvrujci.php" class="text-center text-white" style="font-size: 24px;">Banja Vrujci</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images12.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/Nbanja.php" class="text-center text-white" style="font-size: 24px;">Niska Banja</a>
    </div>
  </article>
<article>
    <img src="static/movies/images13.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/Smederevo.php" class="text-center text-white" style="font-size: 24px;">Smederevo</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images14.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/Zajecar.php" class="text-center text-white" style="font-size: 24px;"> Zajecar</a>
    </div>
  </article>
  <article>
    <img src="static/movies/images15.jpg" alt="Sample photo">
    <div class="text"><a href="static/mesta/Jagodina.php" class="text-center text-white" style="font-size: 24px;">Jagodina</a>
    </div>
  </article>


</div>

<!-- footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<footer >
  
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


</body>
</html>

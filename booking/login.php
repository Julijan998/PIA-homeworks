<?php include('reg_log.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Prijava</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" type="text/css">
<style type="text/css">
  body{
    margin: 0;
    padding: 0;
    background-image: url("static/images/234618753.jpg");
   background-size: cover;
    font-family: sans-serif;
  }
.login-box{
    width: 320px;
    height: 470px;
    color: #fff;
    top: 50%;
    left: 30%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 40px 30px;
    border-radius: 25px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.login-box input{
    width: 100%;
    margin-bottom: 20px;
}

.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box button
{
    border: none;
    outline: none;
    height: 40px;
    width: 110%;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.login-box button:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}

.login-box a:hover
{
    color: #39dc79;
}

.login-box1{
    width: 320px;
    height: 470px;
    color: #fff;
    top: 50%;
    left: 70%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 40px 30px;
    border-radius: 25px;
}
.login-box1 p{
    margin: 0;
    padding: 0;
    font-weight: bold;
  }

.login-box1 input{
    width: 100%;
    margin-bottom: 20px;
}

.login-box1 input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box1 button
{
    border: none;
    outline: none;
    height: 40px;
    width: 110%;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.login-box1 button:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box1 a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}

.login-box1 a:hover
{
    color: #39dc79;
}


.reg{
    font-size: 0.7em;
}

.forgot{
    font-size: 0.7em;
    margin-left: 80px;
}

</style>
</head>
<body style="margin-top: 15%;">


<div class="container text-center">
  <div class="row">
    <div class="col-sm">
 
    <div class="login-box">
  
      <h2 class="text-center text-white mb-5 p-2 border-bottom border-bottom-1 border-info">Korisnik</h2>
  <form method="post" action="login.php">
    
    <?php include('errors.php'); ?>
    <div class="input-group">

      <p>Korisnicko ime:</p>
      <input type="text" name="username" placeholder="Unesite korisnicko ime" >
    </div>
    <div class="input-group">
      <p>Sifra:</p> 
      <input type="password" name="password" placeholder="Unesite sifru">
    </div>
    <p class="reg mb-3">
       <a href="forgot.php">Zaboravili ste sifru?</a>
  </p>
    <div class="input-group justify-content-center">
      <button type="submit" class="btn text-center" name="login">Prijavi se</button>
    </div><p class="reg mt-3">
       <a href="register.php">Nemate nalog? Registruj se</a>
  </p>
  </form>
 

    

   
  
</div>


    </div>

    <div class="col-sm">
  <h1 class="text-center mb-5 p-2 border-bottom border-bottom-1 border-info text-white">Admin prijava!</h1>
  <a  class="bg-warning btn text-center" href="admin_login.php">Prijavi se!</a>

    </div>
   



    <div class="col-sm">
  <div class="login-box1">
  
      <h2 class="text-center mb-5 p-2 border-bottom border-bottom-1 border-info">Izdavac</h2>
  <form method="post" action="login.php">
    
    <?php include('errors.php'); ?>
    <div class="input-group">

      <p>Korisnicko ime:</p>
      <input type="text" name="username" placeholder="Unesite korisnicko ime" >
    </div>
    <div class="input-group">
      <p>Sifra:</p> 
      <input type="password" name="password" placeholder="Unesite sifru">
    </div>
    <p class="reg mb-3">
       <a href="forgot.php">Zaboravili ste sifru?</a>
  </p>
    <div class="input-group justify-content-center">
      <button type="submit" class="btn text-center" name="login_i">Prijavi se</button>
    </div><p class="reg mt-3">
       <a href="register.php">Nemate nalog? Registruj se</a>
  </p>
  </form>
 

    

   
  
</div>
    </div>

  </div>
</div>




</body>
</html>
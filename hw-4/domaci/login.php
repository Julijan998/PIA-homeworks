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
    background: url(static/images/0wvCbE.jpg);
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
    background: black;
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

.reg{
    font-size: 0.7em;
}

.forgot{
    font-size: 0.7em;
    margin-left: 80px;
}

</style>
</head>
<body>
 
    <div class="login-box">
  
	 
    <h2 class="text-center mb-5 p-2 border-bottom border-bottom-1 border-info">Prijava</h2>
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
</body>
</html>
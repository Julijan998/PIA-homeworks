<?php
if(!empty($_POST)){
 $filename = "lista_korisnika.csv";
 $file_handle = fopen($filename,"r");
 $username_find = false;
 if($file_handle == false){
 echo "<p> Problem sa otvaranjem fajla <p>";
 }
 else{
 $No = $_POST["username"];
 while (($Row = fgetcsv($file_handle))!== false){
 if(strcmp($Row[1],$No) == 0){
 echo "<script>alert('Vasa sifra je: $Row[3]'); window.location='http://localhost/1/login.php';</script>";
 $username_find = true;
 break;
}
 }
 if($username_find == false){
 echo "<script>alert('Korisnicko ime koje ste uneli nije registrovano. Pokusajte ponovo'); window.location='http://localhost/1/forgot.php';</script>";
 }
 }
 fclose($file_handle);
 }

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Zaboravljena sifra</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" type="text/css">
<style type="text/css">
 body{
    margin: 0;
    padding: 0;
    background: url(static/images/29587.jpg);
    background-size: cover;
    font-family: sans-serif;
}
.login-box{
    width: 400px;
    height: 340px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 70%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 40px 30px;
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

.login-box input[type="text"]
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

</style>
</head>
<body>
 
    <div class="login-box">
  
	 
    <h2 class="text-center mb-5 p-2 border-bottom border-bottom-1 border-info">Zaboravljena sifra?</h2>
  <form method="post" action="forgot.php">
  	
    
    <div class="input-group">

  		<p>Korisnicko ime:</p>
  		<input type="text" name="username" placeholder="Unesite korisnicko ime"  >
  	</div>
  	<div class="input-group justify-content-center">
  		<button type="submit" class="btn text-center" name="forgot_user">Pronadji</button>
  	</div><p class="reg mt-3">
  		 <a href="register.php">Nemate nalog? Registruj se</a>
  </p>
  </form>

</div>
</body>
</html>
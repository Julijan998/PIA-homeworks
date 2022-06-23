<?php
 if(!empty($_POST)){
 $filename = "lista_korisnika.csv";
 $file_handle = fopen($filename,"a");
 if($file_handle == false){
 echo "<p> Problem sa otvaranjem fajla <p>";
 }
 else{  
 $Row = $_POST;
 fputcsv($file_handle,$Row);
 
 fclose($file_handle);
 }
 }
 ?>

<?php include('reg_log.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registracija</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" type="text/css">
<style type="text/css">
  body{
    margin: 0;
    padding: 0;
    background-image: url("static/images/4113714996_286e670176_b.jpg");
    background-size: cover;
    font-family: sans-serif;

}
.login-box{
    width: 320px;
    height: 630px;
   color: #fff;
    top: 43%;
    left: 17%;
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

.login-box input[type="text"], input[type="password"], input[type="email"]
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


.login-box1{
    width: 320px;
    height: 630px;
   color: #fff;
    top: 50%;
    left: 320%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 40px 30px;
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

.login-box1 input[type="text"], input[type="password"], input[type="email"]
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

</style>

</head>
<body>
  <div class="login-box">
  
  	<h2 class=" text-center mb-5 p-2 border-bottom border-bottom-1 border-info">Registracija<br>(Korisnik)</h2>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	
    
    <div class="input-group">

    <div class="input-group">
      <p>Name</p>
      <input type="text" name="name" placeholder="Unesite ime" value="<?php echo $name; ?>">
    </div>  
    
    <div class="input-group">
  	  <p>Username</p>
  	  <input type="text" name="username" placeholder="Unesite korisnicko ime" value="<?php echo $username; ?>">
  	</div>
  	
    <div class="input-group">
  	  <p>Email</p>
  	  <input type="email" name="email" placeholder="Unesite e-mail" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <p>Password</p>
  	  <input type="password" placeholder="Unesite sifru" name="password_1">
  	</div>
  	<div class="input-group">
  	  <p>Confirm password</p>
  	  <input type="password" placeholder="Potvrdite sifru" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register">Registracija</button>
  	</div>
  	<p class="reg mt-3">
  	<a href="login.php"> Imate nalog?  Prijavite se</a>
  	</p>
  </form>

</div>

  <div class="login-box1">
  
    <h2 class=" text-center mb-5 p-2 border-bottom border-bottom-1 border-info">Registracija<br>(Izdavac)</h2>
<form method="post" action="register.php">
    <?php include('errors.php'); ?>
    
    
    <div class="input-group">
      
    <div class="input-group">
      <p>Name</p>
      <input type="text" name="name" placeholder="Unesite ime" value="<?php echo $name; ?>">
    </div>  
    
    <div class="input-group">
      <p>Username</p>
      <input type="text" name="username" placeholder="Unesite korisnicko ime" value="<?php echo $username; ?>">
    </div>
    
    <div class="input-group">
      <p>Email</p>
      <input type="email" name="email" placeholder="Unesite e-mail" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <p>Password</p>
      <input type="password" placeholder="Unesite sifru" name="password_1">
    </div>
    <div class="input-group">
      <p>Confirm password</p>
      <input type="password" placeholder="Potvrdite sifru" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="register_i">Registracija</button>
    </div>
    <p class="reg mt-3">
    <a href="login.php"> Imate nalog?  Prijavite se</a>
    </p>
  </form>


</body>
</html>
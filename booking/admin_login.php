<?php include('reg_log.php') ?>

<html>
<head>
  <title>Prijava</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" type="text/css">
<style type="text/css">

  body{
    background-image: url("static/images/BELGRADE_NIGHT.jpg");
     background-size: cover;
    background-position: center;
  }
  .login-box{
    width: 320px;
    height: 470px;
    color: black;
    top: 55%;
    left: 30%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 40px 30px;
    border-radius: 25px;
    background-color:  black;
    opacity: 0.8;
    
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;

    font-size: 24px;
   /* background: black;
*/}

.login-box input{
    width: 100%;
    margin-bottom: 20px;
}

.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid white;
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
    font-size: 16px;
    color: white;
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
::placeholder{
  color: black;
}
</style>

</head>
<body>
 <div class="login-box justify-content-center">
  
   <form method="post"  action="admin_login.php">
    <h1 class="text-center mb-5 text-white p-2 border-bottom border-bottom-1 border-info">ADMIN</h1>
    <?php include('errors.php'); ?>
    <div class="input-group">

      <p class="text-white">Korisnicko ime:</p>
      <input type="text" class="text-white" name="username" placeholder="Unesite korisnicko ime" >
    </div>
    <div class="input-group">
      <p class="text-white">Sifra:</p> 
      <input type="password" name="password" placeholder="Unesite sifru">
    </div>
    <div class="input-group justify-content-center">
      <button type="submit" class="btn text-center mb-3" name="admin_lg">Prijavi se</button>
    </div>
    <a  href="login.php" style="text-decoration: underline;">Prijavi se kao korisnik</a>
  </form>

</div>


</body>
</html>
 
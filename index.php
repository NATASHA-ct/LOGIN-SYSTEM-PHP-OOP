<!DOCTYPE html>
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

  <div class="container">
    <img src="img/img_snow_wide.jpg" alt="Snow" style="width:100%;">
    
    <div class="centered"><h1>WELCOME!</h1></div>
  </div>
 
</div>

<section class="index-login">
  <div class="wrapper">
    <div class="index-login-signup">
      <h4>SIGN UP</h4>
      <p>Don't have any account yet? Sign up here!</p>
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="text" name="email" placeholder="E-mail"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password"><br>
        <br>
        <button type="submit" name="submit">SIGN UP</button><br>
      </form>
    </div>

    <div class="index-login-login">
      <h4>LOGIN</h4>
      <p>Don't have any account yet? Sign up here!</p>
      <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <br>
        <button type="submit" name="submit">LOGIN</button><br>
      </form>
    </div>
  </div>

</section>

</body>
</html>

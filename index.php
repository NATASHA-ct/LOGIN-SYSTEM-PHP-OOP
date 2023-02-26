<?php
// for user to see the page login
  session_start();
  
?>

<!DOCTYPE html>
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="topnav">
    <nav class="nav">
        
       <h3>SIMPLIFY</h3>
       <ul id="menu-main">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">PRODUCTS</a></li>
                <li><a href="#">CURRENT SALES</a></li>
                <li><a href="#">MEMBER+</a></li>
        </ul>
        
        <ul class="menu-member">
            <?php

            // IF LOGIN SHOW NAME OF USER
             if(isset($_SESSION["userid"])){
            ?>

            <li><a href="#">Welcome <?php echo $_SESSION["useruid"]; ?></a></li>
            <li><a href="includes/logout.inc.php" class="header-login-a">LogOut</a></li>
            <?php
             }
             else
             {
            ?>
            <li><a href="#">SIGNUP</a></li>
            <li><a href="#">LOGIN</a></li>
            <?php
             }
            ?>
        </ul>
    </nav>
</header>

<section class="banner">
  <h2 class="bheading">We have what you need !</h2>
</section>

<section class="index-login">
  <div class="wrapper">
    <div class="index-login-signup">
      <h4>SIGN UP</h4>
      <p>Don't have any account yet? Sign up here!</p>
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="text" name="email" placeholder="E-mail"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="password" name="pwdRepeat" placeholder="Repeat Password"><br>
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

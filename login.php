<?php
    include('./common.php');
    if(isset($_POST['signup'])) {
        signUp();
    }
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class="login">
        <form id="login" method="post" action="">
            <h2>Login Form</h2>
            <div class="input-container">
              <input class="input-field" type="text" placeholder="Username" name="Username">
            </div>
            
            <div class="input-container">
              <input class="input-field" type="password" placeholder="Password" name="Password">
            </div>
          
            <button name="login" type="submit" class="btn">Login</button>
            <hr>
            <button name="signup" type="submit" class="btn">Sign Up</button>
          </form>
    </body>
</html>
<?php
    include('./common.php');
    if(isset($_POST['signup'])) {
        redirect_login();
    }
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class="sign-up">
        <form id="sign-up" method="post" action="">
            <h2>Sign Up Form</h2>
            <div class="input-container">
              <input class="input-field" type="text" placeholder="Username" name="Username">
            </div>
          
            <div class="input-container">
              <input class="input-field" type="text" placeholder="Email" name="Email">
            </div>
            
            <div class="input-container">
              <input class="input-field" type="password" placeholder="Password" name="Password">
            </div>
          
            <button name="signup" type="submit" class="btn">Sign Up</button>
          </form>
    </body>
</html>
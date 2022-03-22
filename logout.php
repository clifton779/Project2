<?php
    include('./common.php');
    session_start();
    session_unset();
    session_destroy();
    header("refresh:5; url= ./login.php");
    //exit;
?>

<html>
    <head>
        <title>Logout Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php navBar(); ?>
        <div id="logout-message">
            <h1>Logged Out</h1>
            <p>Thank you for using</p>
            <p>Page is redirecting to <span><strong>Login</strong></span> in 5s...</p>
        </div>
    </body>
</html>
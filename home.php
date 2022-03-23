<?php
    include('./common.php');
    session_start(); /* Starts the session */
    $logins = load_creds();
    global $logins;
    if(!isset($_SESSION['UserData']['Username'])){
        die(header("location: ./login.php"));
    }
?>

<html>
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            logo(); 
            navBar(); 
        ?>
        <h1>Welcome to Personality Check, <?= array_search($_SESSION['UserData']['Username'], $logins); ?> </h1>
    </body>
</html>
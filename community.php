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
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            $file = json_decode(file_get_contents('results.json'), true);
            $username = $_SESSION['UserData']['Username'];
            $leaderboard = file('leaderboard.txt');
            $count = count($leaderboard);
            for ($x = 0; $x < $count; $x++) {
                if ($leaderboard[$x] === "Blank\n") {
                    continue;
                } else {
                    $info = $leaderboard[$x];
                    $info = explode(',', $info);
                    $infoCount = count($info);
                    for ($y = 0; $y < $infoCount; $y++) {
                        //Code to create table entry for result in leaderboard
                    }
                }
            }
            $userarray = $file[$username];
            $userCount = count($userarray);
            for ($x = 0; $x < $usrCount; $x++) {
                //code to print result from results page.
            }
        ?>
    </body>
</html>
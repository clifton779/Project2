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
        logo();
        navBar();
        ?>
        <table>
        <?php
            $file = json_decode(file_get_contents('./assets/past_results.json'), true);
            $username = array_search($_SESSION['UserData']['Username'], $logins);
            $leaderboard = file('leaderboard.txt');
            $count = count($leaderboard);
            for ($x = 0; $x < $count; $x++) {
                if ($leaderboard[$x] === "Blank\n") {
                    continue;
                }
                $info = $leaderboard[$x];
                $info = explode(',', $info);
                ?>
                    <tr>
                        <td><?= $info[0];?></td>
                        <td><?= $info[2];?></td>
                        <td><img class="result" src=<?= $info[3];?>/></td>
                        <td><?= $info[4];?></td>
                        <td><?= $info[5];?></td>
                    </tr>
                <?php
            }
        ?>
        </table>
    </body>
</html>
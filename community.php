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
        <title>Community Board</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
        logo();
        navBar();
        ?>
        <div class="results-container">
            <h2>Community Board</h2>
            <table class="quiz-data">
                <tr>
                    <th>Username</th>
                    <th>Quiz Date</th>
                    <th>Quiz</th>
                    <th>Result</th>
                </tr>
            <?php
                $file = json_decode(file_get_contents('./assets/past_results.json'), true);
                $username = array_search($_SESSION['UserData']['Username'], $logins);
                $leaderboard = file('./assets/leaderboard.txt');
                $count = count($leaderboard)-1;
                for ($x = $count; $x > -1; $x--) {
                    if(($count - $x) == 10) {
                        break;
                    }
                    if ($leaderboard[$x] === "Blank\n") {
                        continue;
                    }
                    $info = $leaderboard[$x];
                    $info = explode(',', $info);
            ?>
                <tr>
                    <td><?= $info[0];?></td>
                    <td><?= $info[2];?></td>
                    <td><?= $info[1];?></td>
                    <td><?= $info[4];?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>
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
            if (array_key_exists($username, $file)) {
                $userarray = $file[$username];
                $userCount = count($userarray);
                for ($x = 0; $x < $userCount; $x++) {
                    ?>
                    <tr>
                        <td><?= $username;?></td>
                        <td><?= $userarray[$x][1];?></td>
                        <td><img class="result" src=<?= $userarray[$x][2];?>/></td>
                        <td><?= $userarray[$x][3];?></td>
                        <td><?= $userarray[$x][4];?></td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td>There's Nothing Here! Do a quiz!</td>
                </tr>
            <?php
            }
        ?>
        </table>
    </body>
</html>
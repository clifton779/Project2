<?php
include('./common.php');
session_start(); /* Starts the session */
$logins = load_creds();
global $logins;
if(!isset($_SESSION['UserData']['Username'])){
    die(header("location: ./login.php"));
}
$file = json_decode(file_get_contents('results.json'), true);
$username = $_SESSION['UserData']['Username'];
if (!array_key_exists($username, $file)) {
    $file[$username] = array();
} 
$answers = array($_POST["q1-answers"],$_POST["q2-answers"],$_POST["q3-answers"],$_POST["q4-answers"],$_POST["q5-answers"],$_POST["q6-answers"]);


$userarray = $file[$username];

$arrlength = count($answers);
$A = 0;
$B = 0;
$C = 0;
$D = 0;
$E = 0;
$F = 0;

for($x = 0; $x < $arrlength; $x++) {
    if($answers[$x] === ("A")) {
        $A++;
    } elseif($answers[$x] === ("B")) {
        $B++;
    }elseif($answers[$x] === ("C")) {
        $C++;
    }elseif($answers[$x] === ("D")) {
        $D++;
    }elseif($answers[$x] === ("E")) {
        $E++;
    }elseif($answers[$x] === ("F")) {
        $F++;
    }
}

$arr = compact("A", "B", "C", "D", "E", "F");
arsort($arr);
$result = key($arr);

$pictureURL = '';
if($result === ("A")) {
    $pictureURL = 'url1';
} elseif($result === ("B")) {
    $pictureURL = 'url2';
}elseif($result === ("C")) {
    $pictureURL = 'url3';
}elseif($result === ("D")) {
    $pictureURL = 'url4';
}elseif($result === ("E")) {
    $pictureURL = 'url5';
}elseif($result === ("F")) {
    $pictureURL = 'url6';
}
$insert = $username . ',' . $result;
$userarray[] = $result;
$file[$username] = $userarray;
file_put_contents('results.json', json_encode($file));
$leaderboard = file('leaderboard.txt');
print_r($leaderboard);
$newLeaderboard = array_slice($leaderboard, 1);
print_r($leaderboard);
$insert = $insert . "\n";
$newLeaderboard[] = $insert;
print_r($newLeaderboard);
file_put_contents('leaderboard.txt', $newLeaderboard);

?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body></body>
</html>
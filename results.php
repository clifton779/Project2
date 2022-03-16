<?php
    session_start();
    $userFile = $_SESSION['username'] . ".txt";
    $file = file($userfile);
    $answers = array($_GET('question1'),$_GET('question2'),$_GET('question3'),
        $_GET('question4'),$_GET('question5'),$_GET('question6') )

    $arrlength = count($answers);
    $var1 = 0;
    $var2 = 0;
    $var3 = 0;
    $var4 = 0;
    $var5 = 0;
    $var6 = 0;

    for($x = 0; $x < $arrlength; $x++) {
        if($answers[$x] === ('var1')) {
            $var1++;
        } elseif($answers[$x] === ('var2')) {
            $var2++;
        }elseif($answers[$x] === ('var3')) {
            $var3++;
        }elseif($answers[$x] === ('var4')) {
            $var4++;
        }elseif($answers[$x] === ('var5')) {
            $var5++;
        }elseif($answers[$x] === ('var6')) {
            $var6++;
        }
    }

    $arr = compact('var1', 'var2', 'var3', 'var4', 'var5', 'var6');
    arsort($arr);
    $result = key($arr);

    $pictureURL = '';
    if($result === ('var1')) {
        $pictureURL = 'url1';
    } elseif($result === ('var2')) {
        $pictureURL = 'url2';
    }elseif($result === ('var3')) {
        $pictureURL = 'url3';
    }elseif($result === ('var4')) {
        $pictureURL = 'url4';
    }elseif($result === ('var5')) {
        $pictureURL = 'url5';
    }elseif($result === ('var6')) {
        $pictureURL = 'url6';
    }
    $insert = $_SESSION['username'] . ',' . $result;
    file_put_contents($userfile, $insert, FILE_APPEND);
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body></body>
</html>
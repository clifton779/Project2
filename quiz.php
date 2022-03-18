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
        <title>Quiz</title>
        <meta charset="UTF-8">
        <link rel="stylesheet"  type="text/css" href="./style.css">
    </head>
    <body>
        <?php
            logo();
            navBar();
        ?>
        
        <form id="quiz" action="" method="post" >
            <h1 id="quiz-name">Quiz Name</h1>
            <div class="question">
                <h3>Question 1</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-a" value="A">
                    <label for="q1-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-b" value="B">
                    <label for="q1-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-c" value="C">
                    <label for="q1-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-d" value="D">
                    <label for="q1-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 2</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-a" value="A">
                    <label for="q2-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-b" value="B">
                    <label for="q2-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-c" value="C">
                    <label for="q2-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-d" value="D">
                    <label for="q2-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 3</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-a" value="A">
                    <label for="q3-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-b" value="B">
                    <label for="q3-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-c" value="C">
                    <label for="q3-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-d" value="D">
                    <label for="q3-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 4</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-a" value="A">
                    <label for="q4-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-b" value="B">
                    <label for="q4-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-c" value="C">
                    <label for="q4-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-d" value="D">
                    <label for="q4-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 5</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-a" value="A">
                    <label for="q5-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-b" value="B">
                    <label for="q5-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-c" value="C">
                    <label for="q5-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-d" value="D">
                    <label for="q5-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 6</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-a" value="A">
                    <label for="q6-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-b" value="B">
                    <label for="q6-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-c" value="C">
                    <label for="q6-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-d" value="D">
                    <label for="q6-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 7</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-a" value="A">
                    <label for="q7-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-b" value="B">
                    <label for="q7-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-c" value="C">
                    <label for="q7-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-d" value="D">
                    <label for="q7-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 8</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-a" value="A">
                    <label for="q8-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-b" value="B">
                    <label for="q8-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-c" value="C">
                    <label for="q8-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-d" value="D">
                    <label for="q8-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 9</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-a" value="A">
                    <label for="q9-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-b" value="B">
                    <label for="q9-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-c" value="C">
                    <label for="q9-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-d" value="D">
                    <label for="q9-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 10</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-a" value="A">
                    <label for="q10-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-b" value="B">
                    <label for="q10-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-c" value="C">
                    <label for="q10-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-d" value="D">
                    <label for="q10-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 11</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q-answers" id="q11-answers-a" value="A">
                    <label for="q11-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-b" value="B">
                    <label for="q11-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-c" value="C">
                    <label for="q11-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-d" value="D">
                    <label for="q11-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 12</h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-a" value="A">
                    <label for="q12-answers-A" class="labela">a. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-b" value="B">
                    <label for="q12-answers-B" class="labelb">b. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-c" value="C">
                    <label for="q12-answers-c" class="labelc">c. </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-d" value="D">
                    <label for="q12-answers-d" class="labeld">d. </label>
                </div>
                <hr class="question">
            </div>
        </form>
    </body>
</html>
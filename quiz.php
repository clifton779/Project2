<?php
    include('./common.php');
    session_start(); /* Starts the session */
    $logins = load_creds();
    global $logins;
    if(!isset($_SESSION['UserData']['Username'])){
        die(header("location: ./login.php"));
    }
    $questions = load_questions();
    $answers = load_answers();
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
                <h3>Question 1:
                    <br><br>
                    <?php
                        if(count($questions)>0)
                        {echo $questions[0];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-a" value="A">
                    <label for="q1-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[0];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-b" value="B">
                    <label for="q1-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[1];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-c" value="C">
                    <label for="q1-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[2];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-d" value="D">
                    <label for="q1-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[3];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-e" value="E">
                    <label for="q1-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[4];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-f" value="F">
                    <label for="q1-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[5];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 2:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[1];} 
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-a" value="A">
                    <label for="q2-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[6];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-b" value="B">
                    <label for="q2-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[7];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-c" value="C">
                    <label for="q2-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[8];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-d" value="D">
                    <label for="q2-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[9];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-e" value="E">
                    <label for="q2-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[10];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-f" value="F">
                    <label for="q2-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[11];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 3:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[2];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-a" value="A">
                    <label for="q3-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[12];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-b" value="B">
                    <label for="q3-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[13];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-c" value="C">
                    <label for="q3-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[14];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-d" value="D">
                    <label for="q3-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[15];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-e" value="E">
                    <label for="q3-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[16];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-f" value="F">
                    <label for="q3-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[17];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 4:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[3];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-a" value="A">
                    <label for="q4-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[18];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-b" value="B">
                    <label for="q4-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[19];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-c" value="C">
                    <label for="q4-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[20];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-d" value="D">
                    <label for="q4-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[21];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-e" value="E">
                    <label for="q4-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[22];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-f" value="F">
                    <label for="q4-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[23];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 5:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[4];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-a" value="A">
                    <label for="q5-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[24];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-b" value="B">
                    <label for="q5-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[25];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-c" value="C">
                    <label for="q5-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[26];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-d" value="D">
                    <label for="q5-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[27];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-e" value="E">
                    <label for="q5-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[28];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-f" value="F">
                    <label for="q5-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[29];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 6:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[5];} 
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-a" value="A">
                    <label for="q6-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[30];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-b" value="B">
                    <label for="q6-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[31];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-c" value="C">
                    <label for="q6-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[32];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-d" value="D">
                    <label for="q6-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[33];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-e" value="E">
                    <label for="q6-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[34];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-f" value="F">
                    <label for="q6-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[35];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 7:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[6];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-a" value="A">
                    <label for="q7-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[36];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-b" value="B">
                    <label for="q7-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[37];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-c" value="C">
                    <label for="q7-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[38];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-d" value="D">
                    <label for="q7-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[39];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-e" value="E">
                    <label for="q7-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[40];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-f" value="F">
                    <label for="q7-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[41];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 8:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[7];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-a" value="A">
                    <label for="q8-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[42];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-b" value="B">
                    <label for="q8-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[43];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-c" value="C">
                    <label for="q8-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[44];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-d" value="D">
                    <label for="q8-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[45];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-e" value="E">
                    <label for="q8-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[46];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-f" value="F">
                    <label for="q8-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[47];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 9
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[8];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-a" value="A">
                    <label for="q9-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[48];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-b" value="B">
                    <label for="q9-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[49];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-c" value="C">
                    <label for="q9-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[50];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-d" value="D">
                    <label for="q9-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[51];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-e" value="E">
                    <label for="q9-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[52];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-f" value="F">
                    <label for="q9-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[53];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 10
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[9];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-a" value="A">
                    <label for="q10-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[54];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-b" value="B">
                    <label for="q10-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[55];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-c" value="C">
                    <label for="q10-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[56];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-d" value="D">
                    <label for="q10-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[57];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-e" value="E">
                    <label for="q10-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[58];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-f" value="F">
                    <label for="q10-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[59];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 11:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[10];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q-answers" id="q11-answers-a" value="A">
                    <label for="q11-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[60];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-b" value="B">
                    <label for="q11-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[61];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-c" value="C">
                    <label for="q11-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[62];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-d" value="D">
                    <label for="q11-answers-d" class="labeld">d.<?php if(count($answers)>0) {echo $answers[63];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-e" value="E">
                    <label for="q11-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[64];}?></label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-f" value="F">
                    <label for="q11-answers-f" class="labelf">f. <?php if(count($answers)>0) {echo $answers[65];}?></label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 12:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[11];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-a" value="A">
                    <label for="q12-answers-a" class="labela">a.<?php if(count($answers)>0) {echo $answers[66];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-b" value="B">
                    <label for="q12-answers-b" class="labelb">b.<?php if(count($answers)>0) {echo $answers[67];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-c" value="C">
                    <label for="q12-answers-c" class="labelc">c.<?php if(count($answers)>0) {echo $answers[68];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-d" value="D">
                    <label for="q12-answers-d" class="labeld">d. <?php if(count($answers)>0) {echo $answers[69];}?></label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-e" value="E">
                    <label for="q12-answers-e" class="labelf">e.<?php if(count($answers)>0) {echo $answers[70];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-f" value="F">
                    <label for="q12-answers-f" class="labelf">f.<?php if(count($answers)>0) {echo $answers[71];}?> </label>
                </div>
                <hr class="question">
                <button id="quiz-btn" name="quiz" type="submit" class="btn">Submit</button>
            </div>
        </form>
    </body>
</html>
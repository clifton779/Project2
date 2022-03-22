<?php
    //redirects to sign up page
    function signUp(){
        header("location: ./signup.php");
        exit();
    }

    function redirect_login(){
        header("location: ./login.php");
        exit();
    }

    function navBar() {
        include("./navbar.php");
    }

    function logo() {
        echo '<img id="logo" src="./pc_logo2.png" alt="logo">';
    }

    /* Define username and associated password array */
    function add_user($username, $password) {
        $file = fopen('./cred.txt','a');
        $content = $username.','.$password."\n";
        fwrite($file,$content);

        
        fclose($file);
    }

    function load_creds() {
        $str = file_get_contents('./cred.txt');
        $arr = [];
        foreach(explode("\n", $str) as $line) {
            if(strpos($line, ',') === false) {
                continue;
            }
            list($key, $value) = explode(',', $line);
            $arr[trim($key,'\' ')] = trim(trim($value), '\',');
        }
        return $arr;
    }

    function load_questions() {
        $arr = explode("\n", file_get_contents('./q1_questions.txt'));
        return $arr;
    }

    function load_answers() {
        $arr = explode("\n", file_get_contents('./q1_answers.txt'));
        return $arr;
    }

?>
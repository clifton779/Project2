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
        if(file_exists('./assets/q1_questions.txt')!= TRUE) {
            $arr = [];
            return $arr;
        }
        $arr = explode("\n", file_get_contents('./assets/q1_questions.txt'));
        return $arr;
    }

    function load_answers() {
        if(file_exists('./assets/q1_answers.txt')!= TRUE) {
            $arr = [];
            return $arr;
        }
        $arr = explode("\n", file_get_contents('./assets/q1_answers.txt'));
        return $arr;
    }

    function get_results($arr) {
        $values = array(0,0,0,0,0,0);
        foreach($arr as $value){
            if($value == "A") {$values[0]++;}
            if($value == "B") {$values[1]++;}
            if($value == "C") {$values[2]++;}
            if($value == "D") {$values[3]++;}
            if($value == "E") {$values[4]++;}
            if($value == "F") {$values[5]++;}
        }
        $max_value = max($values);
        $max_index = array_search($max_value, $values);
        return $max_index;
    }

    function get_pic($max_index) {
        if (($max_index >= 0) && (file_exists('./assets/q1_pics_url.txt'))) {
            $arr = explode("\n", file_get_contents('./assets/q1_pics_url.txt'));
            return $arr[$max_index]; 
        }
        return false;
    }

    function get_description($max_index){
        if(file_exists('./assets/q1_results.txt')) {
            $arr = explode("\n", file_get_contents('./assets/q1_results.txt'));
            return $arr[$max_index];
        }
        return false;
    }

    function get_name($max_index){
        if(file_exists('./q1_result_title.txt')){
            $arr = explode("\n", file_get_contents('./assets/q1_result_title.txt'));
            return $arr[$max_index];
        }
        return false;
    }
?>
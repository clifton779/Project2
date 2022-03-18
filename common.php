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

?>
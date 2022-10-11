<?php

if(isset($_POST['submit'])){
    // Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdRepeat'];
    $email = $_POST['email'];

    // Instantiate signupContr class
    require_once '../classes/ConDb.classes.php';
    require_once '../classes/signup.classes.php';
    require_once '../classes/signup-contr.classes.php';

    $signup = new SignupContr($uid,$pwd,$pwdRepeat,$email);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going to back to front page 
    header("location: ../index.php?error=none");
    




}
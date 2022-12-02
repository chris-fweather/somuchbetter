<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $pwd, $pwdrepeat) !== false) {
        header('location: ../bin/signup.php?error=emptyinput');
        exit();
    }
    if (invalidUid($username) !== false) {
        header('location: ../bin/signup.php?error=invalidusername');
        exit();
    }
    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header('location: ../bin/signup.php?error=passwordsdontmatch');
        exit();
    }
    if (uidExists($conn, $username) !== false) {
        header('location: ../bin/signup.php?error=usernametaken');
        exit();
    }

    createUser($conn, $username, $pwd);
}
else {
    header('location: ../bin/signup.php');
    exit();
}
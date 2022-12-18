<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $username = $_POST['username'];
    $discord = $_POST['discord'];
    $twitter = $_POST['twitter'];
    $twitch = $_POST['twitch'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputRoster($name, $age, $location, $username, $discord, $twitter, $twitch) !== false) {
        header('location: ../admin.php?error=emptyinput');
        exit();
    }

    createPlayer($conn, $name, $age, $location, $username, $discord, $twitter, $twitch);
}
else {
    header('location: ../admin.php');
    exit();
}
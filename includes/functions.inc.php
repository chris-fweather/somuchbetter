<?php

function emptyInputSignup($username, $pwd, $pwdrepeat) {
    $result;
    if (empty($username) || empty($pwd) || empty($pwdrepeat)) {
        $result = true;
    }
    else {
       $result = false; 
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        $result = true;
    }
    else {
       $result = false; 
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat) {
    $result;
    if ($pwd !==$pwdrepeat) {
        $result = true;
    }
    else {
       $result = false; 
    }
    return $result;
}

function uidExists($conn, $username) {
    $sql = 'SELECT * FROM users WHERE usersUid = ?;';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../bin/signup.php?error=stmtfailed');
        exit();
    }
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $pwd) {
    $sql = 'INSERT INTO users (usersUid, usersPwd) VALUES (?, ?);';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../bin/signup.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, 'ss', $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../bin/signup.php?success');
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
       $result = false; 
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username);

    if ($uidExists === false) {
        header('location: ../login.php?error=wronglogin');
        exit();  
    }

    $hashedPwd = $uidExists['usersPwd'];
    $checkPwd = password_verify($pwd, $hashedPwd);

    if ($checkPwd === false) {
        header('location: ../login.php?error=wronglogin');
        exit(); 
    }

    else if ($checkPwd === true) {
        session_start();
        $_SESSION['userid'] = $uidExists['usersId'];
        $_SESSION['useruid'] = $uidExists['usersUid'];
        header('location: ../index.php');
        exit();
    }
}

function emptyInputRoster($name, $age, $location, $username, $discord, $twitter, $twitch) {
    $result;
    if (empty($name) || empty($age) || empty($location) || empty($username) || empty($discord) || empty($twitter) || empty($twitch)) {
        $result = true;
    }
    else {
       $result = false; 
    }
    return $result;
}

function createPlayer($conn, $name, $age, $location, $username, $discord, $twitter, $twitch) {
    $sql = 'INSERT INTO players (playersName, playersAge, playersLocation, playersUsername, playersDiscord, playersTwitter, playersTwitch) VALUES (?, ?, ?, ?, ?, ?, ?);';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../admin.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'sssssss', $name, $age, $location, $username, $discord, $twitter, $twitch);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../admin.php?success');
    exit();
}

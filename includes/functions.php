<?php

function uidExists($conn, $username) {
    $sql = "SELECT * FROM users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }
}

function emptyInputLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($con, $username); //wenn false, existiert der username nicht in der DB

    if ($uidExists == false) {
        header("location. ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed  = $uidExists["password"]; //passwort in der DB
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkcPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } 
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        exit();
    }
}
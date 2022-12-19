<?php

if (isset($_POST["submit"])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $surname, $email, $pwd) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (invalidPwd($pwd) !== false) {
        header("location: ../signup.php?error=invalidpassword");
        exit();
    }

    if (uidExists($conn, $email) !== false) {
        header("location: ../signup.php?error=emailtaken");
        exit();
    }

    createUser($conn, $name,$surname,$email,$pwd);

} else {
    header("location: ../signup.php");
}

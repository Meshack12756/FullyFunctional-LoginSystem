<?php 

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $password, $passwordRepeat ) !== false) { 
        header("location: ../signup.php?error=emptyinput");
        exit();

    }

    if(invalidUid($username) !==false) {
        header("location: ../signup.php?error=invaliduid");
        exit();

    }

    if(invalidEmail($email) !==false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if(passwordMatch($password, $passwordRepeat) !==false) {
        header("location: ../signup.php?error=passworddon'tmatch");
        exit();
    }

    if(uidExists($conn, $username, $email) !==false) {
        header("location: ../signup.php?error=usernameistaken");
        exit();
    }

    createUser($conn, $name, $email, $password);

}

else {
    header("location: ../signup.php");
}

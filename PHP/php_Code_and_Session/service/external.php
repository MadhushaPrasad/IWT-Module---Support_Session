<?php

//external
if (isset($_POST['login'])) {
    $userName = $_POST['userName'];
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!(empty($userName | $firstName || $lastName || $email || $password))) {
        session_start();
        $_SESSION['userName'] = "$userName";
        $_SESSION['firstName'] = "$firstName";
        $_SESSION['lastName'] = "$lastName";
        $_SESSION['email'] = "$email";
        $_SESSION['password'] = "$password";
        header("location:/Demo/PHP/php_Code_and_Session/externalForm.php");
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("location:/Demo/PHP/php_Code_and_Session/externalForm.php");
}
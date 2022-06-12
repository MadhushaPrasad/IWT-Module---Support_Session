<?php

$userName = $_POST["userName"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$email = $_POST["email"];
$password = $_POST["password"];

session_start();
$_SESSION["userName"] = $userName;
$_SESSION["fName"] = $fName;
$_SESSION["lName"] = $lName;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

header("location:/IWT-Module---Support_Session/10th_June/PHP/session/displaySessions.php");
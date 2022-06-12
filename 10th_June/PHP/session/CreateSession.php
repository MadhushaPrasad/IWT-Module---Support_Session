<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="SessionMain.php" method="post">
    <input type="text" placeholder="Use Name" name="userName"><br><br>
    <input type="text" placeholder="First Name" name="fName"><br><br>
    <input type="text" placeholder="Last Name" name="lName"><br><br>
    <input type="email" placeholder="email" name="email"><br><br>
    <input type="password" placeholder="password" name="password"><br><br>
    <button style="margin-left: 60px" type="submit" name="login">Login</button>
</form>
<br>
</body>
</html>

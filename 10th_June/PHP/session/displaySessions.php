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
<h1>Display Sessions</h1>
<?php
echo "<h2>User Name: " . $_SESSION["userName"] . "</h2>";
echo "<h2>First Name: " . $_SESSION["fName"] . "</h2>";
echo "<h2>Last Name: " . $_SESSION["lName"] . "</h2>";
echo "<h2>Email: " . $_SESSION["email"] . "</h2>";
echo "<h2>Password: " . $_SESSION["password"] . "</h2>";
?>
</body>
</html>
<?php
//setcookie(name,value,expiration);
setcookie("email", "madhushaPrasad21@gmail.com", time() + 60 * 60 * 24 * 7);
setcookie("password", "*@1&2@$34@", time() + 60 * 60 * 24 * 7);
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
<?php
if (isset($_COOKIE['email'])) {
    echo 'Cookies Email is:' . $_COOKIE["email"] . '</br>';
    echo 'Cookies Password is:' . $_COOKIE["password"];
} else {
    echo 'cookies is not created';
}
?>
</body>
</html>
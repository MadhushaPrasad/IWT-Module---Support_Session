<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>external example</title>
</head>
<body>
<form action="service/external.php" method="post">
    <input type="text" placeholder="Use Name" name="userName"><br><br>
    <input type="text" placeholder="First Name" name="fName"><br><br>
    <input type="text" placeholder="Last Name" name="lName"><br><br>
    <input type="email" placeholder="email" name="email"><br><br>
    <input type="password" placeholder="password" name="password"><br><br>
    <button style="margin-left: 60px" type="submit" name="login">Login</button>
</form>
<br>
<br>
<form action="service/external.php" method="get">
    <button style="margin-left: 60px" type="submit" name="logout">Logout</button>
</form>
<br>
<br>
<table>
    <thead>
    <th>User Name</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
    </thead>
    <tbody>
    <tr>
        <!-- --><?php /*if (isset($_SESSION['userName'])) {
            echo "<td>" . $_SESSION['userName'] . "</td>" .
                "<td>" . $_SESSION['firstName'] . "</td>" .
                "<td>" . $_SESSION['lastName'] . "</td>" .
                "<td>" . $_SESSION['email'] . "</td>" .
                "<td>" . $_SESSION['password'] . "</td>";
        } */ ?>
    </tr>
    </tbody>
</table>
</body>
</html>
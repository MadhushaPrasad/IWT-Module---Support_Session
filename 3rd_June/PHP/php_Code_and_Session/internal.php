<!--On the top of the file - internal-->

<?php

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
        header("location:../php_Code/externalForm.php");
    }
}
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
        <!--        inline-->
        <?php if (isset($_SESSION['userName'])) {
            echo "<td>" . $_SESSION['userName'] . "</td>" .
                "<td>" . $_SESSION['firstName'] . "</td>" .
                "<td>" . $_SESSION['lastName'] . "</td>" .
                "<td>" . $_SESSION['email'] . "</td>" .
                "<td>" . $_SESSION['password'] . "</td>";
        } ?>
    </tr>
    </tbody>
</table>
</body>
</html>
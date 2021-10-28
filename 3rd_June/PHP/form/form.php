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
<form action="services/formService.php" method="post">
    <input type="text" placeholder="UserID" name="userID">
    <input type="email" placeholder="email" name="email"><br><br>
    <input type="password" placeholder="password" name="password"><br><br>
    <button style="margin-left: 60px" type="submit" name="login">ADD</button>
    <button style="margin-left: 60px" type="submit" name="update">UPDATE</button>
</form>
<br>
<br>
<form action="" method="get">
    <button style="margin-left: 60px" type="submit" name="logout">Logout</button>
    <button style="margin-left: 60px" type="submit" name="load">LoadData</button>

</form>
<br>
<br>
<table>
    <thead>
    <tr>
        <th>User Name</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        $connection = mysqli_connect("localhost", "root", "", "testing");
        $response = $connection->query("SELECT * FROM user");;

        while ($userList = $response->fetch_assoc()) {
//        echo "<tr><td>" . $userList['id'] . "</td>" +
//            "<td>" . $userList['email'] . "</td>" +
//            "<td>" . $userList['password'] . "</td></tr>";
            print_r($userList['id']);
            print_r($userList['email']);
            print_r($userList['password']);
            print_r('<br>');
        }
        ?>
    </tr>
    </tbody>
</table>
</body>
</html>
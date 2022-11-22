<?php

$connection = new Mysqli("localhost", "root", "1234", "test01");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

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

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="firstName">First Name: </label>
    <input id="firstName" type="text" name="FirstName">
    <br>
    <br>

    <label for="lastName">Last Name: </label>
    <input id="lastName" type="text" name="LastName">
    <br>
    <br>


    <label for="phone">Phone Number: </label>
    <input id="phone" type="text" name="phone">
    <br>
    <br>

    <button type="submit" name="btnSubmit">Submit</button>
</form>

<?php

if (isset($_POST['btnSubmit'])) {
    $userFirstName = $_POST['FirstName'];
    $userLastName = $_POST['LastName'];
    $userPhone = $_POST['phone'];

    $sql = "INSERT INTO customer (first_name, last_name, phone) VALUES ('$userFirstName', '$userLastName', '$userPhone')";
    $res = $connection->query($sql);

    if ($res && $connection->affected_rows > 0) {
        echo "Successfully added";
    } else {
        echo "Error";
    }
}


?>

</body>
</html>
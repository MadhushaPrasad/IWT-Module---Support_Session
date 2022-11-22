<?php
include 'config.php'
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
<!--Structure of book details-->
<table border="1">
    <thead>
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Image</th>
        <th>Year</th>
        <th>Stores</th>
        <th>Price</th>
    </tr>

    <tbody>
    <?php
    $query = "SELECT * FROM bookdetails";

    $bookList = $connection->query($query);

    while ($bookListArray = $bookList->fetch_assoc()) {

    }
    ?>

    </tbody>
</table>

</body>
</html>

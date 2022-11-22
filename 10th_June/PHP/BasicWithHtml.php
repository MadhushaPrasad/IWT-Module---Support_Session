<?php

$animals = array("cat", "dog", "bird", "fish");


for ($i = 0; $i < count($animals); $i++) {
    echo $animals[$i] . "<br>";
}

$studentDetails = array(
    "John",
    "Dhaka",
    "Test"
);

echo "<hr>";

foreach ($animals as $animal) {
//    print_r($animal);
    echo $animal . "<br>";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="col-10">
        <h1>Student Details Table</h1>
        <table class="table" border="1">
            <thead>
            <tr>
                <th>Name</th>
            <thead>
            <tbody>
            <?php
            foreach ($studentDetails as $key => $value) {
                echo "<tr>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

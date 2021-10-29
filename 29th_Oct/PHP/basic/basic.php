<?php

$connection = new mysqli("localhost", "root", "1234", "school");

if ($connection->connect_error) {
    die("Connection fail " . $connection->connect_error);
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
<table border="1" style="background-color: #efff">
    <tr>
        <th>stuId</th>
        <th>stuName</th>
        <th>IWT</th>
        <th>ISDM</th>
        <th>SPM</th>
        <th>OOC</th>
    </tr>
    <?php
    $query = "SELECT * FROM attendance";

    $studentList = $connection->query($query);

    while ($studentListArray = $studentList->fetch_assoc()) {
        echo "<tr>";
        echo "<td> {$studentListArray['stuId']}";
        echo "<td> {$studentListArray['stuName']}";
        echo "<td> {$studentListArray['IWT']}";
        echo "<td> {$studentListArray['ISDM']}";
        echo "<td> {$studentListArray['SPM']}";
        echo "<td> {$studentListArray['OOC']}";
    }
    ?>
</table>
</body>
</html>
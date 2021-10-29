<?php

$connection = new mysqli("localhost", "root", "1234", "school");

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
<h1>Student Attendance Report for Semester 2</h1>
<table border="1">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>IWT</th>
        <th>ISDM</th>
        <th>SPM</th>
        <th>OOC</th>
    </tr>
    <?php
    $query = "SELECT * FROM attendance WHERE IWT*7.69 > 80 AND ISDM*7.69 > 80 AND SPM*7.69 AND OOC*7.69";
    $attendanceList = $connection->query($query);
    while ($attendanceListArray = $attendanceList->fetch_assoc()){
        echo "<tr>" .
            "<td>" . $attendanceListArray['stuId'] . "</td>" .
            "<td>" . $attendanceListArray['stuName'] . "</td>" .
            "<td>" . $attendanceListArray['IWT'] . "</td>" .
            "<td>" . $attendanceListArray['ISDM'] . "</td>" .
            "<td>" . $attendanceListArray['SPM'] . "</td>" .
            "<td>" . $attendanceListArray['OOC'] . "</td>" .
            "</tr>";
    }
    ?>
</table>
</body>
</html>
<?php
$connection = new mysqli("localhost", "root", "", "employee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report Sheet</title>
</head>
<body>
<div>
    <table border="2">
        <tr>
            <th>Employee</th>
            <th>Employee Name</th>
            <th>Basic Salary</th>
            <th>OT Rate</th>
            <th>OT Hours</th>
            <th>Salary With OT</th>
        </tr>
        <?php
        $sqlQuery = "SELECT empID,empName,BasicSalary,OTRate,OTHours,(BasicSalary + (OTRate*OTHours)) 
            AS 'Salary With OT' FROM salary";

        $employeeLis = $connection->query($sqlQuery);
        while ($Result = $employeeLis->fetch_assoc()) {
            echo "<tr>" .
                "<td>" . $Result['empID'] . "</td>" .
                "<td>" . $Result['empName'] . "</td>" .
                "<td>" . $Result['BasicSalary'] . "</td>" .
                "<td>" . $Result['OTRate'] . "</td>" .
                "<td>" . $Result['OTHours'] . "</td>" .
                "<td>" . $Result['Salary With OT'] . "</td>" .
                "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
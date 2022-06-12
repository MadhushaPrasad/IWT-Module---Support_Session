<?php
$studentDetails = array(
    "John",
    "Dhaka",
    "Test"
);

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
//include "./slectionPHP1.php";
//require "./slectionPHP1.php";
?>

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
<?php

$connection = new mysqli("localhost", "root", "1234", "crud");


echo "<h1>Student Service</h1>";

$studentFirstName = $_POST["firstName"];
$studentLastName = $_POST["latName"];
$studentTelephone = $_POST["telephone"];
$studentAddress = $_POST["address"];

$query = "INSERT INTO student(firstName,latName,telephone,address) VALUES ('$studentFirstName','$studentLastName','$studentTelephone','$studentAddress')";

//echo $query;
$res = $connection->query($query);

echo $res;

if ($res > 0 && $connection->affected_rows > 0) {
    echo "Student added successfully";
} else {
    echo "Student not added";
}


echo "<h2>Student First Name:$studentFirstName</h2>";
echo "<h2>Student Last Name:$studentLastName</h2>";
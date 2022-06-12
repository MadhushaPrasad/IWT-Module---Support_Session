<?php
echo "<h1>Student Service</h1>";

$studentFirstName = $_GET["firstName"];
$studentLastName = $_GET["latName"];
$studentTelephone = $_GET["telephone"];
$studentAddress = $_GET["address"];

echo "<h2>Student First Name:$studentFirstName</h2>";
echo "<h2>Student Last Name:$studentLastName</h2>";
<?php
$connection = new Mysqli("localhost", "root", "1234", "test01");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
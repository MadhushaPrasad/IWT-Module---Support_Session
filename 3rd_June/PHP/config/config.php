<?php

$connection = new mysqli("localhost", "root", "1234", "lk");

if ($connection->connect_error) {
    die("Connection fail " . $connection->connect_error);
}
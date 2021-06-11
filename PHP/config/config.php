<?php

$connection = new mysqli("localhost", "root", "", "testing");

if ($connection->connect_error) {
    die("Connection fail" . $connection->connect_error);
}
<?php

$connection = new mysqli("localhost", "root", "1234", "kuppiya");


if ($connection->connect_error) {
    die("Connection fail " . $connection->connect_error);
}
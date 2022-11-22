<?php

//$connection = new mysqli("http://nanasara.lk", "admin", "admn@ne#231", "book_db");
$connection = new mysqli("localhost", "root", "1234", "kuppiya");


if ($connection->connect_error) {
    die("Connection fail " . $connection->connect_error);
}
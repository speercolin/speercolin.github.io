<?php

$host = 'localhost';
$user = 'root';
$pass = 'Kninjapig12!*+';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
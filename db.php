<?php
$host = "localhost";
$user = "root";
$password = "password";
$database = "bibliotheque";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("connection échouée : " . mysqli_connect_error());
}
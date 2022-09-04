<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "penjualan";

$conn = mysqli_connect($server, $username, $password, $database);
if (!($conn)) {
    echo "Failed to connect to MySql: " . mysqli_connect_error();
}

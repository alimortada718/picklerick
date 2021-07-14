<?php


$un = "";
$pw = "";
$database = "";
$host = "localhost";

$conn = mysqli_connect($host, $un, $pw, $database);
if (!$conn) {
    echo "failure to connect to database on localhost";
}
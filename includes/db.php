<?php
$server = 'localhost';
$dbname = 'furburger';
$un = 'pedro';
$pw = 'king2003';


$conn = mysqli_connect($server, $un, $pw, $dbname);
if (!$conn) {
    echo "failure to connect to database --\localhost";
}
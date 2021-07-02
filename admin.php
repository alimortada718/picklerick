<?php

session_start();

if ($_SESSION["loggedin"] != 1) {
    header("location:index.php");
}

include "includes/db.php";
$sql = "SELECT * FROM scratch";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
print_r($row);
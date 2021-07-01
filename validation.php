<?php
include "include/db.php";
if (isset($_POST["submit"])) {
    $fag = $_POST["fag"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE username='$fag'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    if ($row['username'] == $fag  && $row['password']) {
        header("location:storage.php");
    } else {
        header("location:index.php?wrong='2'");
    }
}
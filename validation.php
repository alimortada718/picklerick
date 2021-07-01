<?php
include "includes/db.php";
if (isset($_POST["submit"])) {
    $fag = $_POST["fag"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE username='$fag'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $md5password = md5($password);

    if ($row['username'] == $fag  && $row['password'] == $md5password) {
        header("location:scratch.php");
    } else {
        header("location:index.php?wrong='2'");
    }
}
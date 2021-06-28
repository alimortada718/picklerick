<?php
include "includes/db.php";
if (isset($_POST["submit"])) {
    $fat = $_POST["fat"];
    $password = $_POST["password"];

    $sql = "SELECT username,pw FROM users WHERE username = '$fat'";

    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    //var_dump($result);


    if ($result > 0) {
        if ($result["pw"] == $password) {
            header("location:kingpin.php");
        } else {
            echo ("get the fuck out");
        }
    } else {
        echo ("wrong username");
    }
}
<?php
session_start();
include("includes/db.php");


if (isset($_POST["submit"])) {
    $fag = $_POST["fag"];
    $password = $_POST["password"];


    $pw = md5($password);
    $sql = "INSERT into users ('username','password')  values('$fag','$pw') ";
    $result = mysqli_query($conn, $sql);
}
// if ()
//     //something was posted
//     if (!empty($user_name) && !empty($password)) {
//         //save to database
//         $user_id = random_num(20);
//         $query = "insert into users (user_id,user_name,password)  values('$user_id','$user_name','$password') ";
//         mysqli_query($con, $query);

//         header("location: login.php");

//         die;
//     } else {
//         echo "PLEASE enter some valid information!";
//     }
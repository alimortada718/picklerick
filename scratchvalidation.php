<?php
include "includes/db.php";
if (isset($_POST["submit"])) {
    $slot1 = $_POST["slot1"];
    $slot2 = $_POST["slot2"];
    $slot3 = $_POST["slot3"];
    $slot4 = $_POST["slot4"];
    $slot5 = $_POST["slot5"];
    $slot6 = $_POST["slot6"];
    $slot7 = $_POST["slot7"];
    $slot8 = $_POST["slot8"];
    echo $slot1;



    $sql = "INSERT INTO `scratch`( `tobacco1`, `tobacco2`, `tobacco3`, `tobacco4`, `tobacco5`, `tobacco6`, `tobacco7`, `tobacco8`) 
    VALUES ('$tobacco1','$tobacco2','$tobacco3','$tobacco4','$tobacco5','$tobacco6','$tobacco7','$tobacco8')";
    $tobacco1 = $_POST["tobacco1"];
    $tobacco2 = $_POST["tobacco2"];
    $tobacco3 = $_POST["tobacco3"];
    $tobacco4 = $_POST["tobacco4"];
    $tobacco5 = $_POST["tobacco5"];
    $tobacco6 = $_POST["tobacco6"];
    $tobacco7 = $_POST["tobacco7"];
    $tobacco8 = $_POST["tobacco8"];
    echo $tobacco1;



    $sql = "INSERT INTO `scratch`( `tobacco1`, `tobacco2`, `tobacco3`, `tobacco4`, `tobacco5`, `tobacco6`, `tobacco7`, `tobacco8`) 
    VALUES ('$tobacco1','$tobacco2','$tobacco3','$tobacco4','$tobacco5','$tobacco6','$tobacco7','$tobacco8')";










    $result = mysqli_query($conn, $sql);
}
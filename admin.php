<?php

session_start();

if ($_SESSION["loggedin"] != 1) {
    header("location:index.php");
}
//  DONT FORGET TO CLOSE YOU LINE ;
include "includes/db.php";
include "function.php";

$sql = "SELECT date,username,safe1,safe2,scratch1,scratch2 ,tobacco1,tobacco2 FROM `report`";

$result =  mysqli_query($conn, $sql);
$report = mysqli_fetch_all($result);

$label = array('date', 'username', 'safe1', 'safe2', 'scratch1', 'scratch2 ', 'tobacco1', 'tobacco2');

// echo "<pre>";
// var_dump($report);
// echo "</pre>";

?>

<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="css/style.css">
</header>
<div class="body">
    <div class="all">
        <h3 style="background-color:yellow;">Shelf</h3> -->
        <?php

        label($label);

        ?>
    </div>
    <div class="all">

        <?php
        shit($report);
        ?>
    </div>

    <div id="thesign">
        <a href="signup.php">SIGNUP</a>
    </div>

</div>

</html>
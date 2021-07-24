<?php

session_start();

if ($_SESSION["loggedin"] != 1) {
    header("location:index.php");
}
//  DONT FORGET TO CLOSE YOU LINE ;
include "includes/db.php";
include "function.php";
$date = date('Y-m-d');
echo ($date);
if (isset($_POST['submit'])) {
    $data = $_POST['date'];
} else {
    $date = date('date');
}



$sql = "SELECT date,username,shift,safe1,safe2,scratch1,scratch2 ,tobacco1,tobacco2 FROM `report` WHERE date ='$date'";

$result =  mysqli_query($conn, $sql);
$report = mysqli_fetch_all($result);

$label = array('date', 'username', 'shift', 'safe1', 'safe2', 'scratch1', 'scratch2 ', 'tobacco1', 'tobacco2');
// echo "<pre>";
// var_dump($report);
// echo "</pre>";








?>

<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="css/style.css">
</header>
<form action="#" method="post">
    <label>date:</label>
    <input type='date' name='date'></br></br>
    <input type="submit"></br>
</form>

<div class="all">
    <table>
        <?php

        label($label);


        shit($report);
        ?>
    </table>

</div>



<div id="thesign">
    <a href="signup.php">SIGNUP</a>
</div>

</div>

</html>
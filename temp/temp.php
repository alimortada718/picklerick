<?php
$number = 1;
while ($number == 1) {
    echo "hi";
    $number += 1;
}

$sql = "SELECT date,username,shift,safe1,safe2,scratch1,scratch2 ,tobacco1,tobacco2 FROM `report` WHERE date ='$date'";
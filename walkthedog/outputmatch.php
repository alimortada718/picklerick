<?php

$date = date("d/m/Y");
$open = "open";
$close = "close";
$user1 = "tom";
$user2 = "dick";
$user3 = "harry";

$row1 = array("date" => $date, "shift" => "open", "user" => $user1, "val" => "000");
$row2 = array("date" => $date, "shift" => "close", "user" => $user1, "val" => "111");
$row3 = array("date" => $date, "shift" => "open", "user" => $user2, "val" => "222");
$row4 = array("date" => $date, "shift" => "close", "user" => $user2, "val" => "333");
$row5 = array("date" => $date, "shift" => "open", "user" => $user3, "val" => "444");
$row6 = array("date" => $date, "shift" => "close", "user" => $user3, "val" => "555");

$array1 = array($row1, $row2, $row3, $row4, $row5, $row6);


for ($i = 1; $i < 5; $i += 2) {

    if ($array1[$i]["val"] == $array1[$i + 1]["val"]) {
    } else {
        echo "mismatch" . " " . $array1[$i + 1]["user"] . " " . $array1[$i + 1]["shift"];
        echo "</br>";
    }
}
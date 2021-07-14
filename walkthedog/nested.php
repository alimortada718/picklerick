<?php

$date = date("d/m/Y");
$open = "open";
$close = "close";
$user1 = "tom";
$user2 = "dick";
$user3 = "harry";


$row1 = array("date" => $date, "shift" => "open", "user" => $user1, "val" => "397");
$row2 = array("date" => $date, "shift" => "close", "user" => $user1, "val" => "100");
$row3 = array("date" => $date, "shift" => "open", "user" => $user2, "val" => "100");
$row4 = array("date" => $date, "shift" => "close", "user" => $user2, "val" => "100");
$row5 = array("date" => $date, "shift" => "open", "user" => $user3, "val" => "100");
$row6 = array("date" => $date, "shift" => "close", "user" => $user3, "val" => "100");

$msqliFetchALL = array($row1, $row2, $row3, $row4, $row5, $row6);


$row7 = array("date" => $date, "shift" => "open", "user" => $user1, "val" => "555");
$row8 = array("date" => $date, "shift" => "close", "user" => $user1, "val" => "100");
$row9 = array("date" => $date, "shift" => "open", "user" => $user2, "val" => "100");
$row10 = array("date" => $date, "shift" => "close", "user" => $user2, "val" => "454");
$row11 = array("date" => $date, "shift" => "open", "user" => $user3, "val" => "100");
$row12 = array("date" => $date, "shift" => "close", "user" => $user3, "val" => "100");

$msqliFetchALL_2 = array($row7, $row8, $row9, $row10, $row11, $row12);


$array3 = array($msqliFetchALL, $msqliFetchALL_2);


for ($i = 0; $i < 2; $i++) {


    foreach ($array3[$i] as $sq) {
        var_dump($sq);
    }
    echo "</br></br></br> -------End Array </br></br></br>";
}

for ($i = 0; $i < 2; $i++) {


    foreach ($array3[$i] as $sq) {
        var_dump($sq);
        echo "<br>";
    }
    echo "</br></br></br> -------End Array </br></br></br>";
}



for ($i = 0; $i < 2; $i++) {


    foreach ($array3[$i] as $sq) {
        echo "<pre>";
        var_dump($sq);
        echo "</pre>";
    }
    echo "</br></br></br> -------End Array </br></br></br>";
}

for ($i = 0; $i < 2; $i++) {


    foreach ($array3[$i] as $sq) {
        echo "<pre>";
        var_dump(array_keys($sq));
        echo "</pre>";
    }
    echo "</br></br></br> -------End Array </br></br></br>";
}


/*

Just some usefull code that does not run. Copy and paste to save keystrokes
        echo "<pre>";
        echo $someVariable;
        echo "</pre>";

        echo "<pre>";
        print_r($someVariable);
        echo "</pre>";

        echo "<pre>";
        var_dump($someVariable);
        echo "</pre>";

        echo "<pre>";
        echo (array_keys($someVariable));
        echo "</pre>";
*/
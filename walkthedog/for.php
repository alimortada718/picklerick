<?php
$row1 = array("date" => "date1", "shift" => "open", "user" => "user1", "val" => "397");
$row2 = array("date" => "date1", "shift" => "close", "user" => "user1", "val" => "100");
$row3 = array("date" => "date1", "shift" => "open", "user" => "user2", "val" => "100");
$row4 = array("date" => "date1", "shift" => "close", "user" => "user2", "val" => "100");
$row5 = array("date" => "date1", "shift" => "open", "user" => "user3", "val" => "100");
$row6 = array("date" => "date1", "shift" => "close", "user" => "user3", "val" => "100");

$msqliFetchALL = array($row1, $row2, $row3, $row4, $row5, $row6);


$row7 = array("date" => "date1", "shift" => "open", "user" => "user1", "val" => "397");
$row8 = array("date" => "date1", "shift" => "close", "user" => "user1", "val" => "100");
$row9 = array("date" => "date1", "shift" => "open", "user" => "user2", "val" => "100");
$row10 = array("date" => "date1", "shift" => "close", "user" => "user2", "val" => "100");
$row11 = array("date" => "date1", "shift" => "open", "user" => "user3", "val" => "100");
$row12 = array("date" => "date1", "shift" => "close", "user" => "user3", "val" => "100");

$msqliFetchALL_2 = array($row7, $row8, $row9, $row10, $row11, $row12);


$array3 = array($msqliFetchALL, $msqliFetchALL_2);
/*
Will produce error because echo cannot output an array
*/


for ($i = 0; $i < 3; $i++) {

    echo $row1[$i];
    echo "</br>";
}
echo "</br></br></br>";

for ($i = 0; $i < 3; $i++) {

    print_r($row1["date"]);
    echo "</br>";
}
echo "</br></br></br>";
for ($i = 0; $i < 3; $i++) {

    print_r($msqliFetchALL[$i]);
    echo "</br>";
}
echo "</br></br></br>";

/*
Notice the 2nd array bracket
This is one way of drilling down through arrays
Means array index of an array index
*/


for ($i = 0; $i < 3; $i++) {

    print_r($msqliFetchALL[$i]["date"]);
    echo "</br>";
}
echo "</br></br></br>";

for ($i = 0; $i < 3; $i++) {

    var_dump($msqliFetchALL[$i]["date"]);
    echo "</br>";
}
echo "</br></br></br>";

/*
Will produce error because index 3 does not exist
*/

for ($i = 0; $i < 3; $i++) {

    var_dump($array3[$i][$i]);
    echo "</br>";
}
echo "</br></br></br>";

/*
The 3 now changed to a 2 corrects this
*/


for ($i = 0; $i < 2; $i++) {

    var_dump($array3[$i][$i]);
    echo "</br>";
}
echo "</br></br></br>";

for ($i = 0; $i < 2; $i++) {

    var_dump($array3[$i][$i]["date"]);
    echo "</br>";
}
echo "</br></br></br>";









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
<?php


/*
--------Synthetic representation of a sql database table
 Each table is assigned to a variable
 Each Variable is a single dimension array

*/

$row1 = array("date" => "date1", "shift" => "open", "user" => "user1", "val" => "397");
$row2 = array("date" => "date1", "shift" => "close", "user" => "user1", "val" => "100");
$row3 = array("date" => "date1", "shift" => "open", "user" => "user2", "val" => "100");
$row4 = array("date" => "date77", "shift" => "close87", "user" => "user276", "val" => "100");
$row5 = array("date" => "date1", "shift" => "open", "user" => "user3", "val" => "100");
$row6 = array("date" => "date1", "shift" => "close", "user" => "user3", "val" => "100");


$row7 = array("date" => "date1", "shift" => "open", "user" => "user1", "val" => "397");
$row8 = array("date" => "date1", "shift" => "close", "user" => "user1", "val" => "100");
$row9 = array("date" => "date1", "shift" => "open", "user" => "user2", "val" => "100");
$row10 = array("date" => "date1", "shift" => "close", "user" => "user2", "val" => "100");
$row11 = array("date" => "date1", "shift" => "open", "user" => "user3", "val" => "100");
$row12 = array("date" => "date1", "shift" => "close", "user" => "user3", "val" => "100");




/*
-----------Multidimensional array 1
These indexed arrays contains associative arrays from the above variables
*/
$array1 = array($row1, $row2, $row3, $row4, $row5, $row6);
$array2 = array($row7, $row8, $row9, $row10, $row11, $row12);


/*
-----------Multidimensional array 2

This indexed array contains other index arrays from the above variables creating a 3 dimensional array
*/
$array3 = array($array1, $array2);

/*
-----------Loops--------
This is a foreach loop   

foreach($array as $arr){
    do stuff;
}


It takes in an array and assigns each index to an alias with "as"

*/

foreach ($row1 as $arr) {


    echo $arr;
    echo "</br>";
}
echo "</br></br></br>";

/*
Will produce error because echo cannot output an array
*/

foreach ($array1 as $arr) {


    echo $arr;
    echo "</br>";
}
echo "</br></br></br>";

foreach ($array1 as $arr) {


    print_r($arr);
    echo "</br>";
}
echo "</br></br></br>";

foreach ($array1 as $arr) {


    var_dump($arr);
    echo "</br>";
}

echo "</br></br></br>";

foreach ($array1[3] as $arr) {


    echo $arr;
    echo "</br>";
}
echo "</br></br></br>";


foreach ($array1[0] as $arr) {


    echo $arr[0];
    echo "</br>";
}
echo "</br></br></br>";

foreach ($array3 as $arr) {
    var_dump($arr);
    echo "</br>";
}
echo "</br></br></br>";

/*
The <pre></pre> tag is an html tag that makes array outputs display nice, I just like it
*/


foreach ($array3 as $arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
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
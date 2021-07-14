<?php


function banshee($val1, $val2)
{
    $sum = $val1 * $val2;
    echo $sum;
}



function quit($bech)
{
    foreach ($bech as $arr) {
        echo $arr . "</br>";
    }
}
function ma($het)
{
    for ($i = 0; $i < 2; $i++) {
        echo ($het[$i]);
    }
}
function mn()
{
    for ($i = 0; $i < 2; $i++) {
        echo $i;
    }
}
<?php
$l = 0;
for ($k = 0; $k < 10; $k++) {
    $i = 0;

    for ($j = 0; $j < 10; $j++) {

        echo $l . $i;
        echo "</br>";
        $i += 1;
    }
    $i = 0;
    $l += 2;
}
$l = 0;
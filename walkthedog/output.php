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

$row7 = array("date" => $date, "shift" => "open", "user" => $user1, "val" => "555");
$row8 = array("date" => $date, "shift" => "close", "user" => $user1, "val" => "100");
$row9 = array("date" => $date, "shift" => "open", "user" => $user2, "val" => "100");
$row10 = array("date" => $date, "shift" => "close", "user" => $user2, "val" => "454");
$row11 = array("date" => $date, "shift" => "open", "user" => $user3, "val" => "100");
$row12 = array("date" => $date, "shift" => "close", "user" => $user3, "val" => "100");

$array2 = array($row7, $row8, $row9, $row10, $row11, $row12);
$array3 = array($array1, $array2);




?>
<!doctype <!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <div class="container"><img src="img/adminlog.png" alt="jc admin"></div>

        </header>
        <div class="container">
            <?php

        for ($i = 0; $i < 2; $i++) {
        ?>
            <table class="container">
                <tr>
                    <th>
                        TABLE<?php echo $i + 1; ?>
                    </th>

                </tr>


                <?php
                foreach ($array3[$i] as $arr) {
                ?>
                <tr>
                    <?php
                        foreach ($arr as $ar) {
                        ?>
                    <td> <?php echo $ar; ?> </td>
                    <?php
                        }

                        ?>
                </tr>
                <?php
                }
                ?>
            </table>
            <?php
        }
        ?>
        </div>

    </body>

</html>
<?php
echo "</br></br></br> -------End Tables </br></br></br>";

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
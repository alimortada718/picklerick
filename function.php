<?php



function shit($label1)
{

    foreach ($label1 as $row) {
        foreach ($row as $ro) { ?>
<?php
            echo $ro;
            ?>
</br>
<?php
        }
    }
}
function label($label1)
{

    foreach ($label1 as $row) {
        ?>
<?php
        echo $row;
        ?>
</br>
<?php

    }
}
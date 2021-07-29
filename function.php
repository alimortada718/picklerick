<?php

function shit($label1)
{

    foreach ($label1 as $row) {
?>
<tr>
    <?php
            foreach ($row as $ro) {
            ?>
    <td class="all">
        <?php
                    echo $ro;
                    ?>
    </td>
    <?php
            }
            ?>
<tr>
    <?php

    }
}

function label($label1)
{
        ?>
<tr>
    <?php

            foreach ($label1 as $row) {
            ?>
    <th class="dot">
        <?php
                    echo $row;
                    ?>
    </th>
    <?php

            }

            ?>

</tr>
<?php
}
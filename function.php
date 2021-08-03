<?php

function shit($label1)
{

    foreach ($label1 as $row) {
?>
<tr>




    <?php $i = 0;
            foreach ($row as $ro) {
            ?>
    <td class="all" id="<?php echo $i;
                                    ?> 
        <?php
                echo $ro;
        ?>
    </td>
    <?php

                $i += 1;
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
    <th class=" dot">
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
    ?>
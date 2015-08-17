<?php
$shopping_list = array_values($_GET['shoppinglist']);

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1>Shopping List</h1>
        <h2>Items to buy</h2>
        <table>
            <?php foreach ($shopping_list as $id => $item) : ?>
                <tr>
                    <td><?php echo ($id + 1) . "."; ?> </td> 
                    <td> <?= $item; ?></td> 
                    <td>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>

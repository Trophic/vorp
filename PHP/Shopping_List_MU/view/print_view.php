
<!DOCTYPE html>

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
        <a href="index.php">BACK</a>
    </body>
</html>

<?php include APP_DIR . "/view/header.php"; ?>

<div id="main">
    <!-- part 2: the Shopping List -->
    <h2>Items to buy </h2>
    <a href="index.php?action=sort">re-order</a>
    <a href="index.php?action=clear">clear all</a>
    <?php if (count($shopping_list) == 0) : ?>
        <p>There are no items in your shopping list.</p>
    <?php else: ?>
        <form action="." method="post" >
            <table>
                <?php foreach ($shopping_list as $id => $item) : ?>
                    <tr>
                        <td><?php echo ($id + 1) . "."; ?> </td> 
                        <td> <?php echo htmlentities($item, ENT_HTML5); ?></td> 
                        <td>
                            <input type="checkbox" name ="checkeditems[]" value="<?= $id ?>"/>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>

                    <td colspan="2">
                        Reason   
                    </td>
                    <td>
                        <select name="tag_id">
                            <?php foreach ($tags as $tag): ?>

                                <option value="<?= $tag['tag_id'] ?>"><?= $tag['tag_name'] ?></option>
                            <?php endforeach; ?>
                        </select>                       
                    </td>
                </tr>
            </table>
            <input type="hidden" name="action" value="delete_items" />
            <input type="submit" name="btnDelete" value="Delete"/>
        </form>
    <?php endif; ?>
    <br />

    <!-- part 3: the add form -->
    <h2>Add Item</h2>
    <form action="." method="post" >

        <label>Item:</label>
        <input type="text" name="newitem" id="newitem"/> 
        <label>&nbsp;</label>
        <input type="hidden" name="action" value="add_item" />
        <input type="submit" name="btnAdd" value="Add Item"/><br />
    </form>
    <br />
    <a href="index.php?action=print">Print</a>
</div><!-- end main -->

<?php include APP_DIR . "/view/footer.php"; ?>

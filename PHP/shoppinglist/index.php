<?php
define('SHOPPING_LIST_COOKIE_NAME', 'shopping_list');

function get_shopping_list() {
    if (array_key_exists(SHOPPING_LIST_COOKIE_NAME, $_COOKIE)) {
        return json_decode(base64_decode($_COOKIE[SHOPPING_LIST_COOKIE_NAME]));
    }
    //cookie does not exist (not set or timed out)
    return [];
}

function save_shopping_list($shopping_list) {
    $shopping_list_string = base64_encode(json_encode($shopping_list));
    setcookie(SHOPPING_LIST_COOKIE_NAME, $shopping_list_string, time() + (60 * 2), "/");
}

function add_item(&$shopping_list, $item) {
    array_push($shopping_list, $item);
	save_shopping_list($shopping_list);
}

function delete_item(&$shopping_list, $idx) {
    unset($shopping_list[$idx]);
    $shopping_list = array_values($shopping_list);
	save_shopping_list($shopping_list);
}

$errors = [];
$shopping_list = get_shopping_list();

if (isset($_POST['btnAdd']) && $_POST['btnAdd'] == "Add Item") {
    $shopping_list = get_shopping_list();
    $new_item = $_POST['newitem'];
    if (empty($new_item)) {
        $errors[] = 'The new item cannot be empty.';
    } else {
        add_item($shopping_list, $new_item);
    }
}

if (isset($_POST['btnDelete']) && $_POST['btnDelete'] == "Delete") {
    $shopping_list = get_shopping_list();
	$item_index = $_POST['itemid'];
    delete_item($shopping_list, $item_index);
}


?>

<!DOCTYPE html>
<head>
    <title>Shopping List</title>
</head>
<body>
    <pre>
        <?php echo json_encode($shopping_list) ?>
    </pre>

    <div id="page">
        <div id="header">
            <h1>Shopping List</h1>
        </div>
        <div id="main">
            <!-- part 1: the errors -->
            <?php if (count($errors) > 0) : ?>
                <h2>Errors</h2>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <!-- part 2: the Shopping List -->
            <h2>Items to buy</h2>
            <?php if (count($shopping_list) == 0) : ?>
                <p>There are no items in your shopping list.</p>
            <?php else: ?>
                <table>
                    <?php foreach ($shopping_list as $id => $item) : ?>
                        <tr>
                            <td><?php echo ($id + 1) . "."; ?> </td> 
                            <td> <?= $item; ?></td> 
                            <td>
                                <!-- part 2a: the delete button form -->
                                <form action="." method="post" >
                                    <input type="hidden" name="itemid" value="<?= $id; ?>"/>
                                    <input type="submit" name="btnDelete" value="Delete"/>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
            <br />

            <!-- part 3: the add form -->
            <h2>Add Item</h2>
            <form action="." method="post" >
                <label>Item:</label>
                <input type="text" name="newitem" id="newitem"/> 
                <label>&nbsp;</label>
                <input type="submit" name="btnAdd" value="Add Item"/><br />
            </form>
            <br />
        </div><!-- end main -->
    </div><!-- end page -->
</body>
</html>
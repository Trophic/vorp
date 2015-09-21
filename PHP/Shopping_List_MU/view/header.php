<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Shopping List</title>
</head>
<body>
    <div id="page">
        <div id="header">
            <h1>Shopping List</h1>
        </div> <!-- end header -->
       
        <div id="errors">
            <!-- part 1: the errors -->
            <?php if (count($errors) > 0) : ?>
                <h2>Errors</h2>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div><!-- end errors -->

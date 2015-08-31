 <?php $dudes = ["cate blanchett","Michael Bodd", "John Fleeting", "Tosh Greenslade", "Kit Taylor", "Exodus Lale", "Lorna Westbrook", "Ozzie Devrish"]; ?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <ol>
            <?php foreach ($dudes as $dude): ?>
            <li><?= $dude ?></li>
            <?php endforeach ?>
            </ol>    
        </body>
    </html>

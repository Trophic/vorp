<?php
$maxctemp = $minctemp ="";
if(isset($_POST['submit'])){
?>
<html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <form>
            <br /> Max Temp: <input type="text" name="maxctemp" value="<?php echo $maxctemp;?>">
            <br /> Min temp: <input type="text" name="minctemp" value="<?php echo $minctemp;?>">
            <input type="submit" name="submit" value="Submit">
            </form>
            <?php
            $maxftemp = ($maxctemp * 1.8) + 32;
            $minftemp = ($minctemp * 1.8) + 32;
            ?>
            <table border="1" cellspacing="1" cellpadding="1">
                <thead>
                    <tr>
                        <th>Celcius</th>
                        <th>Fahrenheit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $maxctemp ?></td>
                        <td><?php echo $maxftemp ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $minctemp ?></td>
                        <td><?php echo $minftemp ?></td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>

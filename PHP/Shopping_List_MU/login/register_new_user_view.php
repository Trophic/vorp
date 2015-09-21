<?php include APP_DIR . "/view/header.php"; ?>

<div id = main>
    <h2><?= $page['heading'] ?></h2>
    <form action="." method="post">
        <fieldset>
            <table>
                <tr>
                    <td><p><label for="uname" >Username:</label></p></td>
                    <td>  
                        *<input type="text"  required="" placeholder="select your user name" name="user_name" value="<?= $user['user_name']; ?>" maxlength="40" />
                    </td>
                </tr>

                <tr> <td><p><label for="full_name" >Full Name</label></p></td>
                    <td>*<input type="text"  required="" placeholder="enter your name" name="full_name" value="<?= $user['full_name']; ?>" maxlength="40" /></td>
                </tr>
                <tr>
                    <td> <p><label for="email" >Email</label></p></td>
                    <td> *<input type="text"  required="" placeholder="joe@example.com" name="email" value="<?= $user['email']; ?>" maxlength="40" /></td>
                </tr>
                <tr>
                    <td> <p><label for="password">Password</label></p></td>
                    <td>*<input type="password" required=""  placeholder="********"  name="password" value="<?= $user['password']; ?>" maxlength="40" /></td>
                </tr>

                <tr>
                    <td> <input type="hidden" name="action" value="<?= $page['action'] ?>" />
                        <button  type="button" onclick="window.location = '<?= $page['cancel_link'] ?>';
                                return false;">&rarr; Cancel</button></td>
                    <td> <input type="submit" value="&rarr; <?= $page['button'] ?>" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div><!-- end main -->

<?php include APP_DIR . "/view/footer.php"; ?>
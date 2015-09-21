<?php include "../view/header.php"; ?>
 
<div id = main>
     <?php if (!isset($_SESSION['user_id'])): ?>
            <h2>Login Here </h2>
            <form action=".?action=login_submit" method="post">
                <fieldset>
                    <p>
                        <label for="username" >Username or email</label>
                        <input type="text"  required="" placeholder="joe@example.com" name="uname" value="" maxlength="40" />
                    </p>
                    <p>
                        <label for="password">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" required=""  placeholder="********"  name="password" value="" maxlength="40" />
                    </p>
                    <p>
                        <input type="submit" value="&rarr; Login" />
                    </p>
                </fieldset>
            </form>
            Not a member. Please register  <a href=".?action=show_register_form">here</a>
        <?php else: ?>
            <h2>Logout Here</h2>
            <p>You are logged in<br>please <a href=".?action=logout">log out </a> first</p>
        <?php endif; ?>
    
    
</div><!-- end main -->

<?php include "../view/footer.php"; ?>
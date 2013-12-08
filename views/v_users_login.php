<form method='POST' action='/users/p_login'>

    Email<br>
    <input type='text' name='email'>

    <br><br>

    Password<br>
    <input type='password' name='password'>

    <br><br>

    <input type='submit' value='Log in'>

    <?php if($error && $error == 'user-exists'): ?>
		This user already exists. Please login.
	<?php elseif($error): ?>
		Incorrect user information.
	<?php endif; ?>

</form>
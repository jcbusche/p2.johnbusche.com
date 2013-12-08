<form method='POST' action='/users/p_login'>

    Email<br>
    <input type='text' name='email'>

    <br><br>

    Password<br>
    <input type='password' name='password'>

    <br><br>

    <input type='submit' value='Log in'>

</form>

<?php if($error && $error == 'user-exists'): ?>
	This user already exists. Please login.
<?php elseif(isset($error) && $error == 'invalid-login'): ?>
	Login failed.  Please try again.
<?php endif; ?>
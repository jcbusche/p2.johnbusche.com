<!-- <p>
	Hello World! You have successfully spawned a new application.
</p>

<p>
	This message is being triggered via the c_index.php controller, within the index() method.
</p>

<p>
	<strong>Since everything is in working order, you should now delete <?php echo APP_PATH?>diagnostics.php</strong>
</p> -->

<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
<div>
<?=APP_NAME?> is a simple microblog that allows you to create posts and follow others.
<br><br>
+1 Features include:
<ul>
	<li>
		Deleting posts
	</li>

	<li>
		Email notification of registration
	</li>
</ul>
</div>
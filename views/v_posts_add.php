<?php if(isset($error)):?>
	<div class='error' align "center">

		Post is empty.
		<br><br>
	</div>

<?php else: ?>

<form method='POST' action='/posts/p_add'>



	<div>

    <label for='content'>New Post:</label><br>
    <textarea name='content' id='content'></textarea>

    <br><br>
    <input type='submit' value='Publish'>
	</div>
</form> 

<?php endif; ?>
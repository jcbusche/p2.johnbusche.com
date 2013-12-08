<?php if($user): ?>
    <h1>Welcome to your profile, <?=$user->first_name?>.  Here you can view, edit, and delete your posts.</h1>

    <?php $posts_reverse = array_reverse($posts); ?>
    <?php foreach($posts_reverse as $post):?> 
	

		<article>

		    <h2><?=$post['first_name']?> <?=$post['last_name']?> posted:</h2>

		    <p><?=$post['content']?></p>

		    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
		        <?=Time::display($post['created'])?>
		    </time>

		</article>

		</form action="/posts/p_delete<$posts.post_id?>" medthod="post">
			<input type = "submit" name = "Delete" value = "X"/>
		</form>
		

	<?php endforeach; ?>
<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>
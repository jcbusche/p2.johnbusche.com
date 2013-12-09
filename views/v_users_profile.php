<?php if($user): ?>
    <h1>Welcome to your profile, <?=$user->first_name?>.  Here you can view, edit, and delete your posts.</h1>

    <?php $posts_reverse = array_reverse($posts); ?>
    <?php foreach($posts_reverse as $post):?> 
	

		<article>

		    

		    <p><?=$post['content']?></p>

		    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
		        <?=Time::display($post['created'])?>
		    </time>
		    <form action="/posts/p_delete/<?=$post['post_id']?>" method="post">
				<input type="submit" name="delete" value="Delete"/>
			</form>

		</article>

	<?php endforeach; ?>
<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>
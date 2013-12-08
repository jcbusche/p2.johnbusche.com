<?php if($user): ?>
    <h1>Welcome to your profile, <?=$user->first_name?>.  Here you can view, edit, and delete your posts.</h1>

    <?php foreach($posts as $post): ?>

	<article>

	    <h2><?=$post['first_name']?> <?=$post['last_name']?> posted:</h2>

	    <p><?=$post['content']?></p>

	    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
	        <?=Time::display($post['created'])?>
	    </time>

	</article>

	<?php endforeach; ?>
<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>
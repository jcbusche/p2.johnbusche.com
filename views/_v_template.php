<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<div id='menu'>


        <a href='/'><span id = "logo"><?php echo strtoupper(APP_NAME);?></a>
        <br>

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>
            <ul>
                <li>
                    <a href='/users/profile'>Profile</a>
                </li>    
                    
                <li>
                    <a href='/posts'>Your Feed</a>
                </li>

                <li>
                    <a href='/posts/add'>New post</a>
                </li>

                <li>
                    <a href='/posts/users'>Manage Subscriptions</a>
                </li> 
                
                <li>
                    <a href='/users/logout'>Logout</a>
                </li>
            </ul>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <ul>
                <li>
                    <a href='/users/signup'>Sign up</a>
                </li>

                <li>    
                    <a href='/users/login'>Log in</a>
                </li>
            </ul>    

        <?php endif; ?>

    </div>

    <br>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>
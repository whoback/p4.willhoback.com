<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
    <link rel="stylesheet" href="../style.css"
  
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	

</head>

<body>	
    <div class="container">

<div id='menu' class="pure-menu pure-menu-open pure-menu-horizontal">
    <ul>
        <li><a href='/'>Home</a></li>
    </ul>

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>
        <ul>

            <li><a href='/users/logout'>Logout</a></li>
            <li> <a href='/reminder/add'>Add Reminder</a></li>
            <li><a href='/reminder'>Past Reminders</a></li>
        </ul>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>
        <ul>
            <li><a href='/users/signup'>Sign up</a></li>
            <li><a href='/users/login'>Log in</a></li>
        </ul>

        <?php endif; ?>

    </div>
    <div class="pure-u-1" id="main">

    <div class="content">

    <?php if(isset($content)) echo $content; ?>
</div>

</div>
</div>


</body>
</html>
<?php if($user): ?>
	<div class="header">
<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
</div>


<?php else: ?>
    <div class="header">
<h1>Welcome to <?=APP_NAME?>. </h1>
<h2>Humans can only remember 7 things at once. Don't forget your best ideas!</h2>
<p><h3>Remind.me is a simple service that allows you to get your ideas out of your head 
	so you can have even more of them. Remind.me will simultainiously email your reminders to you
	 and save them for later viewing. Sign up and login to use the service!</h3></p>
</div>
<?php endif; ?>
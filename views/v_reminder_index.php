<?php $reminders = array_reverse($reminders) ?>

<?php foreach($reminders as $reminder): ?>

<article class="reminders">

    <h1><?=$reminder['first_name']?> <?=$reminder['last_name']?> posted:</h1>
    <span>Remind me:</span>
    <div class="remindercontent">
    	<p ><?=$reminder['content']?></p>
    </div>
    <div class="remindertime">
    	<span>At:</span>
    	<p><?=$reminder['the_time']?></p>
    </div>
    <span>On:</span>
    <div class="reminderdate">
    	<p ><?=$reminder['the_date']?></p>
    </div>
    
    <time datetime="<?=Time::display($reminder['created'],'Y-m-d G:i')?>">
        <?=Time::display($reminder['created'])?>
    </time>

</article>

<?php endforeach; ?>
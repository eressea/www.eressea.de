<?php
include_once '../includes/class.twitter.php';
include_once '../includes/time_since.php';
?>
<div id="right">
<div class="panel">
    <div class="caps">Causes We Support</div>
    <p>
        <a class="external" href="http://www.savetherhino.org/">Save the Rhino</a><br/>
        <a class="external" href="http://www.gorillas.org/">Diane Fossey Fund</a>
    </p>
</div>

<div class="panel"><div class="caps">Twitter</div>
<a href="http://www.twitter.com/eresseadev/"><img border="0" src="../images/twitter-logo.png" width="132" height="132"/></a>
<p>Eressea has a twitter feed at <a href="http://www.twitter.com/eresseadev/">@eresseadev</a>.</p>
<? /*
$t = new twitter;
$t->username = 'eresseadev';
$t->password = 'andune99';
$data = $t->userTimeline($t->username, 2);
if ($data) {
	foreach($data as $e) {
		$time = time_since(strtotime($e->created_at));
		?><p><a href="http://twitter.com/eresseadev/status/<?=$e->id?>"><?=$time?> ago</a><br/><?=$e->text?></p><?
	}
}
*/ ?>
</div>
</div>

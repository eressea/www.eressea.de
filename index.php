<?php
$acceptLang=(($_SERVER["HTTP_ACCEPT_LANGUAGE"] == '') ? '*' :
						         $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
$alparts=@preg_split("/,/",$acceptLang);
foreach($alparts as $part) {
    $part=trim($part);
    if(preg_match("/;/", $part)) {
				$lang=@preg_split("/;/",$part);
				$part=$lang[0];
    }
		if ($part == 'de') break;
		if ($part == 'en') break;
		$part = 'en';
}
// $url = $_SERVER['REQUEST_URI'];
header("Location: $part/");
?>

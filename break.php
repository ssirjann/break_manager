<?php 

	$content = file_get_contents('/etc/hosts');
	// $content = nl2br($content);
	// $matches = array();
	// preg_match_all('/0\.0\.0\.1.+\.com.*<br\ \/>/', $content, $matches);
	// // var_dump($matches);
	// foreach ($matches as $match) {
	// 	$content = str_replace($match, '', $content);
	// }
	// var_dump($content);
	// echo $content;
	// 
	// 10.0.0.1 facebook.com    
 $websites = [
	'0.0.0.1 www.facebook.com',
	'0.0.0.1 youtube.com',
	'0.0.0.1 www.youtube.com',
	'0.0.0.1 messenger.com',
	'0.0.0.1 www.messenger.com',
	'0.0.0.1 mbasic.facebook.com',
	'0.0.0.1 sastodeal.com',
	'0.0.0.1 www.sastodeal.com',
	'0.0.0.1 kaymu.com.np',
	'0.0.0.1 www.kaymu.com.np',
	'0.0.0.1 hamrobazaar.com',
	'0.0.0.1 www.hamrobazaar.com',
	'0.0.0.1 quora.com',
	'0.0.0.1 www.quora.com',
	'0.0.0.1 twitter.com',
	'0.0.0.1 www.twitter.com',
	'0.0.0.1 qfxcinemas.com',
	'0.0.0.1 www.qfxcinemas.com'
];
if(stripos($content, $websites[3])) {
	foreach ($websites as $website) {
		$content = str_ireplace("\n$website", '', $content);
	}
	$message = "Break mode ON";
	// if the content was found, then delete them and die
}
else {
	foreach ($websites as $website) {
		$content .= "\n$website";
	}
	$message = "Break mode OFF";
}
file_put_contents('/etc/hosts', $content);

echo $message."\n";

 ?>
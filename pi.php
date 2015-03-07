<?php

require_once('pie.php');
$trial=0;
$result=0;

while($result!=200 && $trial<3){
	$result = post_tweet('3/14/15 9:26:53 #piday');
	print $result." ";
	$trial++;
}


function post_tweet($tweet_text) {
	require_once('twitteroauth.php');
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, USER_KEY, USER_SECRET);
	$connection->post('statuses/update', array('status' => urldecode($tweet_text)));

return $connection->http_code;

}

?>

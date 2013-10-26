<?php
session_start();
require('TwitterOAuth.class.php');

$consumer_key = 'l4kv1lnRTgGmRhyrwf4lBg';
$consumer_secret = 'SjiNQd7Xggl3tULRAN2cWNrPXpqBEKAPuRTHcHsdNTk';

$t = new TwitterOAuth($consumer_key, $consumer_secret);
$request_token = $t->getRequestToken('http://www.orestescarracedo.com/tapi/callback.php?');

/* Save temporary credentials to session. */
$_SESSION['oauth_token']        = $token = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

/* If last connection failed don't display authorization link. */
switch ($t->http_code) {
  case 200:
    /* Build authorize URL and redirect user to Twitter. */
    $url = $t->getAuthorizeURL($token);
    header('Location: ' . $url); 
    break;
  default:
    /* Show notification if something went wrong. */
    echo 'Could not connect to Twitter. Refresh the page or try again later.';
	var_dump($t);
}
<?php
session_start();
require('TwitterOAuth.class.php');

$token        = '402019310-G1N4OnV0AIwgoX6yaB7uEgw2O9RPefSHu1KRzUdY';
$token_secret = 'wL07acRAeav9gXA8Vohw4vg8SGk5jV4rGDQVlOqU4Q';

$consumer_key = 'epMcUxhKJ7bdBfFKA6jPOg';
$consumer_secret = 'GgXGPXNjTvGJLbPHnRZS8FksGizikrw1pbTDkQk3T4';

$t = new TwitterOAuth($consumer_key, $consumer_secret, $token, $token_secret);
$content = $t->get('https://api.twitter.com/1.1/statuses/user_timeline.json');

var_dump($content);

$d = new DateTime($content->status->created_at);
$status = array(
  'time' => $d->format('F j, Y H:i'),
  'text' => $content->status->text,
  'id' =>  $content->status->id
);

file_put_contents('status.txt', serialize($status));

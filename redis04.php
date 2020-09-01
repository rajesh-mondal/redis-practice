<?php

require "vendor/autoload.php";
$redis = new Predis\Client();

// $redis->rpush( 'chatroom', 'Jonny: great' );
$redis->rpop( 'chatroom' );
$length = $redis->llen( 'chatroom' ); // message count

print_r( $redis->lrange( 'chatroom', 0, $length ) );
<?php

require "vendor/autoload.php";
$redis = new Predis\Client();

// $redis->set("key",10); //set key
// $redis->expire("key",30); // expire time set
// $redis->del("key"); //delete key

// another way
// $redis->set("key",10,"EX", 30);
echo $redis->get( "key" );

//array storing
echo "Array Storing\n";
$redis->set( "user1", json_encode( ['name' => 'John Doe', 'email' => 'john@doe.com'] ) );
echo $redis->get( "user1" ) . "\n";
print_r( json_decode( $redis->get( "user1" ), true ) ); //decoding

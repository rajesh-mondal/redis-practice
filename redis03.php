<?php

require "vendor/autoload.php";
$redis = new Predis\Client();

$redis->hset( 'car01', 'name', 'Sunny' );
$redis->hset( 'car01', 'build', '2004' );
$redis->hset( 'car01', 'company', 'Nissan' );

//echo $redis->hget( 'car01', 'name' ); // for single value
echo $redis->hset( 'car01', 'build', 2005 ); // update
//echo $redis->hdel( 'car01', 'build' ); // delete
print_r( $redis->hgetall( 'car01' ) );
echo PHP_EOL;

//Another Way
$car = [
    'name'    => 'Sunny',
    'build'   => '2004',
    'company' => 'Nissan',
];

$redis->hmset( 'car01', $car );
print_r( $redis->hmget( 'car01', ['name', 'build'] ) );

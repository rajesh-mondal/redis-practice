<?php
// redis key value increasing, decreasing
require "vendor/autoload.php";
$redis = new Predis\Client();

$redis->set( "product_stock", 10 );
echo $redis->get( "product_stock" ) . "\n";

// $redis->incr( "product_stock" );
// echo $redis->get( "product_stock" );
echo PHP_EOL;

//increase by
$redis->incrby( "product_stock", 5 ); //increase by 5
//$redis->decrby( "product_stock", 5 ); //decrease by 5
echo $redis->get( "product_stock" );

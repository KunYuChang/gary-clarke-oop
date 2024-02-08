<?php // typed-properties.php

require_once 'Counter.php';
require_once 'Connection.php';

$connection1 = new Connection();

print Connection::$count . PHP_EOL;


$connection2 = new Connection();

print Connection::$count . PHP_EOL;

// 沒有封裝會產生值被更改的風險
Connection::$count += 20;
print Connection::$count . PHP_EOL;

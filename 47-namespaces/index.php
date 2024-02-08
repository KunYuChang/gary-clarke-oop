<?php // invoke.php

require_once 'mysql-connection.php';
require_once 'postgresql-connection.php';

$mySqlConnection = new \MySql\Connection();
$postgresConnection = new \Postgres\Connection();

print $mySqlConnection->connect() . PHP_EOL;
print $postgresConnection->connect() . PHP_EOL;

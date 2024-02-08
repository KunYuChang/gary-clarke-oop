<?php // invoke.php

require_once 'mysql-connection.php';
require_once 'postgresql-connection.php';

use MySql\Connection as MySqlConnection;
use Postgres\Connection as PostgresConnection;

$mySqlConnection = new MySqlConnection();
$postgresConnection = new PostgresConnection();

print $mySqlConnection->connect() . PHP_EOL;
print $postgresConnection->connect() . PHP_EOL;

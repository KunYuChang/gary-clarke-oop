<?php

use Utility\Chart;

require_once 'autoload.php';

$chart = new Chart();
print $chart->draw();

$connection = new \Postgres\Connection();
print $connection->connect() . PHP_EOL;

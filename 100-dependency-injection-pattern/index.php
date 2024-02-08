<?php

use App\OldStuff\ExampleProcessor;
use App\OldStuff\NullFileWriter;

require_once 'vendor/autoload.php';

$csv = new \App\OldStuff\CsvFileWriter();
$json = new \App\OldStuff\JsonFileWriter();

$processor = new ExampleProcessor($csv);
$processor->process(['foo' => 'bar']);

$jsonProcessor = new ExampleProcessor($csv);

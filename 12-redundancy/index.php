<?php // inheritance.php

require_once 'Book.php';

$physicalBook = new Book('A Random Book', 'Jane Doe', 2000, 'physical'); // 實體書
$digitalBook = new Book('A Random Book', 'Jane Doe', 2000, 'digital'); // 電子書

print $physicalBook->print() . PHP_EOL;
print $digitalBook->print() . PHP_EOL;

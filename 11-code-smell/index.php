<?php // inheritance.php

require_once 'Book.php';

$physicalBook = new Book('A Random Book', 'Jane Doe', 2000); // 實體書
$digitalBook = new Book('A Random Book', 'Jane Doe', 2000); // 電子書

// code smell
print $physicalBook->getFileSize() . PHP_EOL;
print $physicalBook->getWeight() . PHP_EOL;

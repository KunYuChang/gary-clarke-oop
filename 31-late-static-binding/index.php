<?php

require_once('Book.php');
require_once('Song.php');

$book = Book::create();
$song = Song::create();

var_dump($book);
var_dump($song);

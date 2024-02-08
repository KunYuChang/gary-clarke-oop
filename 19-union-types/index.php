<?php // typed-properties.php

require_once 'Song.php';

$song = new Song('Yesterday', 100);
$song->setRating(3.5);
print $song->getRating() . PHP_EOL;

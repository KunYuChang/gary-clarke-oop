<?php

declare(strict_types=1);

require_once 'Song.php';

$song = new Song('Blackbird', 123);

print $song->numberOfPlays . PHP_EOL;

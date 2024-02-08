<?php

require_once 'vendor/autoload.php';

$song = new \App\Song('Yesterday', 'The Beatles', 180, new \App\SongDataWriter());
$songAsText = $song->write();

$song2 = new \App\Song('Yesterday', 'The Beatles', 180, new \App\JsonSongDataWriter());
$songAsText2 = $song2->write();

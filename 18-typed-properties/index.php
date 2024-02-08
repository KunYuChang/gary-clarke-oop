<?php // typed-properties.php

require_once 'Song.php';

$songTitles = ['Yesterday', 'Help!', 'Something'];

$song = new Song($songTitles[0], 100);

// 如果沒有對屬性進行資料型態宣告，那麼有可能會出現非預期操作，例如把名子誤載成陣列卻可以執行。
//$song->name = $songTitles;
//var_dump($song->name);

$song->numberOfPlays = [300, 200];

var_dump($song->numberOfPlays);

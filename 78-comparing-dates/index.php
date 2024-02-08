<?php

// Compare with > and <
$today = date_create('now');
$saturday = date_create('saturday');
$result = $today > $saturday;

// 由於兩個變數來自於不同物件，因此使用鬆散比對。
var_dump($today == $saturday);

// Diff
$inThePast = date_create('2015-04-04');
$inTheFuture = date_create('2025-08-08');
$interval = $inTheFuture->diff($inThePast);

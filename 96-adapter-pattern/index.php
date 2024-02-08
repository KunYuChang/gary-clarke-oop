<?php // adapter.php

require_once 'vendor/autoload.php';

// 新套件
$fileWriter = new \App\NewStuff\NewCsvFileWriter();

// 使用 Adapter Pattern 讓新套件 Method 跟舊套件一樣。
$fileWriter = new \App\NewStuff\NewFileWriterAdapter($fileWriter);

// 如此一來就可以直接套用了，不需要更改舊套件程式碼，這還真是不可思議。
$processor = new \App\OldStuff\ExampleProcessor($fileWriter);
$processor->process(['foo' => 'bar']);

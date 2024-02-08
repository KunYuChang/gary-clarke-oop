<?php

use App\Admin;

// 引入自動載入檔案
require_once 'vendor/autoload.php';

// 創建 Admin 類別的反射類別實例
$adminClass = new \ReflectionClass(Admin::class);

// 取得類別名稱
$className = $adminClass->getName();

// 取得類別的簡短名稱
$shortName = $adminClass->getShortName();

// 取得建構函式的參數
$params = $adminClass->getMethod('__construct')->getParameters();

// 取得所有方法
$methods = $adminClass->getMethods();

// 選擇第三個方法
$method = $methods[2];

// 取得父類別
$parentClass = $adminClass->getParentClass();

// 取得類別的起始行和結束行
$startLine = $adminClass->getStartLine();
$endLine = $adminClass->getEndLine();

// 取得實現的介面名稱
$interfaces = $adminClass->getInterfaceNames();

// 計算類別的行數
$length = $endLine - $startLine + 1;

// 輸出結果到檔案
$classTxt = '/Users/gc/Sites/chapter6/AdminClass.txt';

// 設定類別名稱
$content = "Class name: " . $className . PHP_EOL;

// 附加父類別名稱到內容
$content .= "Parent class name: " . $parentClass->getName() . PHP_EOL;

// 附加實現的介面名稱到內容，使用逗號分隔
$content .= "Interface names: " . implode(', ', $interfaces) . PHP_EOL;

// 附加使用的 Trait 名稱到內容，使用逗號分隔
$content .= "Trait names: " . implode(', ', $adminClass->getTraitNames()) . PHP_EOL;

// 附加 Trait 的別名到內容，使用逗號分隔
$content .= "Trait aliases: " . implode(', ', $adminClass->getTraitAliases()) . PHP_EOL;

// 附加靜態屬性到內容，使用逗號分隔
$content .= "Static properties: " . implode(', ', $adminClass->getStaticProperties()) . PHP_EOL;

// 附加預設屬性到內容，使用逗號分隔
$content .= "Default properties: " . implode(', ', $adminClass->getDefaultProperties()) . PHP_EOL;

// 附加是否可複製的訊息到內容
$content .= $adminClass->isCloneable() ? 'Is Cloneable' . PHP_EOL : 'Not cloneable' . PHP_EOL;

// 附加是否可實例化的訊息到內容
$content .= $adminClass->isInstantiable() ? 'Is Instantiable' . PHP_EOL : 'Not instantiable' . PHP_EOL;

// 附加是否為內部類別的訊息到內容
$content .= $adminClass->isInternal() ? 'Internal' . PHP_EOL : 'Not internal' . PHP_EOL;

$content .= "File name: " . $adminClass->getFileName() . PHP_EOL;

$content .= "Start line: " . $startLine . PHP_EOL;

$content .= "End line: " . $endLine . PHP_EOL;

$content .= "Length: " . $length . PHP_EOL;

$content .= "Short name: " . $shortName . PHP_EOL;

// 將內容寫入檔案
fwrite(fopen($classTxt, 'w'), $content);

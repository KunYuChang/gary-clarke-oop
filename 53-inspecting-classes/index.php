<?php // inspecting-classes.php

require_once 'vendor/autoload.php';

// 檢查類別是否存在(兩種寫法)
$exists = class_exists('App\User');
$exists = class_exists(\App\User::class);

// dd($exists);
// dd(\App\User::class);

// 使用 UserFactory 類別建立物件
$unknownObject = \App\UserFactory::create(5, 'Gary');

// 獲取物件的類別名稱(兩種方法)
$className = get_class($unknownObject);
$className = $unknownObject::class;

// 檢查物件是否為指定類別的實例
$isUser = $unknownObject instanceof \App\User;

// 創建 Admin 物件
$admin = new \App\Admin(5, 'Gary');

// 獲取父類別的名稱
$parentClass = get_parent_class($admin);

// 檢查物件是否為指定父類別的子類別
$isSubclass = is_subclass_of($admin, \App\User::class);

// 取得實現的介面
$classImplements = class_implements($admin);

// 檢查物件是否是指定介面的實例
$isUserInstance = is_a($admin, \App\AuthenticatedUserInterface::class);

dd($parentClass);

<?php // inspecting-classes.php

require_once 'vendor/autoload.php';

$user = new \App\User(5, 'Gary');

// 取得公開方法 (不包含私有、受保護方法)
$classMethods = get_class_methods($user);

// 檢查方法是否存在
$methodExists = method_exists($user, 'setPassword');

// 檢查方法是否可呼叫
$isCallable = is_callable([$user, 'setPassword']);

// 取得類別的屬性
$props = get_class_vars(\App\User::class);

// 取得物件的屬性
$objectVars = get_object_vars($user);

dd($objectVars);

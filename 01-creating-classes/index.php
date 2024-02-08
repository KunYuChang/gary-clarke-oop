<?php

// 當我們進入物件導向程式設計 (OOP) 的領域時，類別 (Class) 扮演了非常重要的角色，
// 它可以被視為物件的設計藍圖或建構計畫。
// 類別是用來創建物件的模板，它定義了物件應該具備的特性和行為。

class Product
{
}

$product = new Product();
$anotherProduct = new Product();
var_dump($product);
var_dump($anotherProduct);

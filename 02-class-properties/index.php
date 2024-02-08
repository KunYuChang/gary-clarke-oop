<?php

class Product
{
	public $name = 'soap';
	public $price = 10;
}

$soapObject = new Product();
print $soapObject->name . "\n";
print $soapObject->price . "\n";
$soapObject->name = 'toothpaste';
$soapObject->price = 5;
print $soapObject->name . "\n";
print $soapObject->price . "\n";

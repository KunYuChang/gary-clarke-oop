<?php // dependency-injection.php

require_once 'vendor/autoload.php';

$order = new \App\Order();
$orderController = new \App\OrderController();

$notifier = new \App\SmsNotifier;

$orderController->create($order, $notifier);

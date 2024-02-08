<?php

require_once 'vendor/autoload.php';

$userRegistration = new \App\DTO\UserRegistration('Gary', 'gary@example.com');

$userRegistration->email = 'info@example.com';

dd($userRegistration);

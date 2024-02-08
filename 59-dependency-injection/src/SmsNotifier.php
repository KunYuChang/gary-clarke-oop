<?php // src/SmsNotifier.php

namespace App;


class SmsNotifier
{
	public function send($to)
	{
		echo 'Sending SMS to ' . $to . PHP_EOL;
	}
}

<?php // src/SmsNotifier.php

namespace App;


class SmsNotifier extends Notifier
{
	public function send($to)
	{
		echo 'Sending SMS to ' . $to . PHP_EOL;
	}
}

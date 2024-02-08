<?php

namespace App;

class EmailNotifier extends Notifier
{
	public function send($to)
	{
		echo 'Sending email to ' . $to . PHP_EOL;
	}
}
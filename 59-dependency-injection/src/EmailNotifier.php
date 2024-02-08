<?php

namespace App;

class EmailNotifier
{
	public function send($to)
	{
		echo 'Sending email to ' . $to . PHP_EOL;
	}
}

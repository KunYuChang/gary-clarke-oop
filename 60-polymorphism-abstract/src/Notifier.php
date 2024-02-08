<?php

namespace App;

abstract class Notifier
{
	abstract public function send($to);
}

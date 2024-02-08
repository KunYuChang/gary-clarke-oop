<?php

namespace App\OldStuff;

class JsonFileWriter extends FileWriter
{
	public function writeToFile(array $data): bool
	{
		print PHP_EOL . 'Writing to JSON fiel...' . PHP_EOL;

		sleep(2);

		return true;
	}
}

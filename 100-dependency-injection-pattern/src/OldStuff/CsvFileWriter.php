<?php
use App\FileWriter;

class CsvFileWriter extends FileWriter
{
	public function writeToFile(array $data): bool
	{
		print PHP_EOL . 'Writing to CSV fiel...' . PHP_EOL;

		sleep(2);

		return true;
	}
}
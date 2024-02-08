<?php

namespace App;

use App\OldStuff\FileWriter;

abstract class FileProcessor
{
	abstract public function createFileWriter(): FileWriter;

	public function process($data = [])
	{
		// Obtaion a file writer
		$fileWriter = $this->createFileWriter();

		print 'Doing some porcessing now...' . PHP_EOL;

		// Now, use the product.
		return $fileWriter->writeToFile($data);
	}
}

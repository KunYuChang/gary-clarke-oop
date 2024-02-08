<?php

namespace App;

class CsvFilePorcessor extends FileProcessor
{
	public function createFileWriter(): FileWriter
	{
		return new CsvFileWriter();
	}
}

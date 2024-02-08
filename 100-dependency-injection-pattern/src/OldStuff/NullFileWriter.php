<?php

namespace App;

class NullFileWriter extends FileWriter
{
	public function writeToFile($data): bool
	{
		// DO NOTHING

		return true;
	}
}

<?php

namespace App\OldStuff;

abstract class FileWriter
{
	abstract public function writeToFile($data): bool;
}

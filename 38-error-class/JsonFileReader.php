<?php // JsonFileReader.php

require_once 'FileNotFoundException.php';

class JsonFileReader
{
	public function readFileAsAssociativeArray(string $filename): array
	{
		if (!file_exists($filename)) {

			throw new FileNotFoundException('File could not be found');
		}

		$content = file_get_contents($filename);

		$items = json_decode(json: $content, associative: true, flags: JSON_THROW_ON_ERROR);

		return $items;
	}
}

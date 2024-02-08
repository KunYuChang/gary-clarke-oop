<?php // JsonFileReader.php

class JsonFileReader
{
	public function readFileAsAssociativeArray(string $filename): array
	{
		if (!file_exists($filename)) {

			throw new Exception('File could not be found');
		}

		$content = file_get_contents($filename);

		// 使用參數強制拋出錯誤
		$items = json_decode(json: $content, associative: true, flags: JSON_THROW_ON_ERROR);

		return $items;
	}
}

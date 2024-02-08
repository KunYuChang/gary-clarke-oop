<?php

/**
 * Data Type
 * boolean,
 * integer,
 * float,
 * string,
 * object,
 * resource,
 * array,
 * null
 */

class Song
{
	public $name;
	public $numberOfPlays;
	public function __construct(string $name, int $numberOfPlays)
	{
		$this->name = $name;
		$this->numberOfPlays = $numberOfPlays;
	}
}

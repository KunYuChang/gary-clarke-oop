<?php

namespace App;

class JsonSong extends Song
{
	public function write(): string
	{
		return json_encode($this);
	}
}
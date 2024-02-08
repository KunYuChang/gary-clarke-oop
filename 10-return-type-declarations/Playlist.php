<?php // Playlist.php

class Playlist
{
	public $songs = [];

	// Class Type Declarations
	public function addSong(Song $song): void
	{
		$this->songs[] = $song;
	}

	public function getLength(): int
	{
		return count($this->songs);
	}
}

<?php // Playlist.php

class Playlist
{
	public $songs = [];

	// Class Type Declarations
	public function addSong(Song $song): void
	{
		$this->songs[] = $song;
	}
}

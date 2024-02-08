<?php // Playlist.php

class Playlist implements SongHolder
{
	private $songs = [];

	public function addSong(Song $song): void
	{
		$this->songs[] = $song;
	}

	public function getSongs(): array
	{
		return $this->songs;
	}
}

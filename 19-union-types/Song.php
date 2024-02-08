<?php // Song.php

class Song
{
	public string $name;
	public int $numberOfPlays;
	private int|float $rating;

	public function __construct(string $name, int $numberOfPlays)
	{
		$this->name = $name;
		$this->numberOfPlays = $numberOfPlays;
	}

	public function getRating(): int|float
	{
		return $this->rating;
	}

	public function setRating(int|float $rating): void
	{
		$rating = max(0, $rating);
		$rating = min(5, $rating);

		$this->rating = $rating;
	}
}

<?php

namespace App;

class User
{
	public function __construct(
		private string $username,
		private string $password
	) {
	}

	public function __serialize(): array
	{
		return [
			'user' => $this->username,
			'pass' => $this->password
		];
	}
}

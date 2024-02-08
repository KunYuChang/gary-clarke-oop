<?php

namespace App;

class User implements AuthenticatedUserInterface
{
	public function __construct(
		private int $id,
		private string $name
	) {
	}
}

<?php

namespace App\DTO;

class UserRegistration
{
	public function __construct(
		public string $username,
		public string $email
	) {
	}
}

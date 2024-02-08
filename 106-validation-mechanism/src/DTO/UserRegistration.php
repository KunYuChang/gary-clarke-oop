<?php

namespace App\DTO;

use App\Validation\Rules\Required;

class UserRegistration
{
	public function __construct(
		#[Required]
		public string $username,
		#[Required]
		public string $email
	) {
	}
}

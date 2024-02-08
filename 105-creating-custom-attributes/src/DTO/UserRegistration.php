<?php

namespace App\DTO;

use App\Validation\Rules\Required;

class UserRegistration
{
	public function __construct(
		#[Required]
		readonly public string $username,
		#[Required]
		readonly public string $email
	) {
	}
}

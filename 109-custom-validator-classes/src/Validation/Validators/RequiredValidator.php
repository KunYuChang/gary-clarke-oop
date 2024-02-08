<?php

namespace App\Validation\Validators;

class RequiredValidator
{
	public function validate($value): bool
	{
		return !empty($value);
	}
}

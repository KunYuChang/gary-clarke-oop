<?php // src/Validation/Rules/Required.php

namespace App\Validation\Rules;

use App\Validation\Validators\RequiredValidator;
use App\Validation\Validators\ValidatorInterface;
use Attribute;

#[Attribute]
class Required implements ValidatorInterface
{
	public function getValidator(): ValidatorInterface
	{
		return new RequiredValidator();
	}
}
<?php // src/Validation/Validator.php

namespace App\Validation;

use App\Validation\Rules\ValidationRuleInterface;
use ReflectionAttribute;
use ReflectionClass;

class Validator
{
	private array $errors = [];

	public function validate(object $object): void
	{
		// 實例化一個反射類別 (ReflectionClass)，用於獲取物件的相關資訊
		$reflector = new ReflectionClass($object);

		// 迴圈遍歷物件的屬性
		foreach ($reflector->getProperties() as $property) {

			// Get the Attributes using $property->getAttributes(); (only if ValidationRuleInterface)
			$attributes = $property->getAttributes(
				ValidationRuleInterface::class,  // 只獲取標記了 ValidationRuleInterface 介面的屬性
				ReflectionAttribute::IS_INSTANCEOF // 指定 ReflectionAttribute 的篩選條件
			);


			// Loop over the Attributes

			// Instantiate a PropertyValidator instance using $attribute->getValidator();

			// Ask IF the property does not validate

			// Add the property to errors with a message
		}
	}
}

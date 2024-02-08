<?php

require_once 'Identifiable.php';
require_once 'IdentifiableTrait.php';
require_once 'IdentifiableTraitImposter.php';
require_once 'Likeable.php';

class Song implements Identifiable
{
	protected int $like = 0;
	use Likeable;
	use IdentifiableTrait;
	use IdentifiableTraitImposter {
		// 由於存在方法衝突，因此需進行以下的因應措施
		IdentifiableTraitImposter::getHexId insteadof IdentifiableTrait;
		IdentifiableTrait::getHexId as getOriginalHexId;
	}

	public function getId(): string
	{
		return 'ID returned from class';
	}
}

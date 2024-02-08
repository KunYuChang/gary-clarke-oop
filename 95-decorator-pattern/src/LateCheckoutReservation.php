<?php

namespace App;

// 延遲退房預訂

class LateCheckoutReservation extends Reservation
{
	public function calculateCost(): float
	{
		return 12;
	}
}

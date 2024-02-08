<?php

namespace App;

// 預訂高級套房

class ExecutiveSuiteReservation extends Reservation
{
	public function calculateCost(): float
	{
		return 15;
	}
}

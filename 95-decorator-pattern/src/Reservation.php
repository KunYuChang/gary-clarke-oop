<?php

namespace App;

class Reservation implements ReservationInterface
{
	private float $cost = 10;
	public function calculateCost(): float
	{
		return $this->cost;
	}

	public function exectiveReservation(): float
	{
		return $this->cost * 1.5;
	}
}

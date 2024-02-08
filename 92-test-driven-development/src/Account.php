<?php

namespace App;

class Account
{
	// account number property
	private int $accountNumber;

	public function setAccountNumber($accountNumber): void
	{
		// set a real account number
		$this->accountNumber = $accountNumber;
	}

	public function getAccountNumber(): int
	{
		return $this->accountNumber; // return a real account number
	}
}

// 1. Write a failing test
// 2. Wirte enough code to make the test pass
// 3. Refactor for clean, working code
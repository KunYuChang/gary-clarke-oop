<?php

namespace App;

class Account
{
	// account number property
	private int $accountNumber;
	private User $user;

	public function setAccountNumber(int $accountNumber): void
	{
		// set a real account number
		$this->accountNumber = $accountNumber;
	}

	public function getAccountNumber(): int
	{
		return $this->accountNumber; // return a real account number
	}

	public function setUser(User $user): void
	{
		$this->user = $user;
	}

	public function getUser(): User
	{
		return $this->user;
	}
}

// 1. Write a failing test
// 2. Wirte enough code to make the test pass
// 3. Refactor for clean, working code
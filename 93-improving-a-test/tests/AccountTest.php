<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
	/** @test 
	 *  @covers Account::setAccountNumber
	 *  @covers Account::getAccountNumber
	 */
	public function an_account_number_can_be_set(): void
	{
		// 1. Setup
		$account = new \App\Account();

		// 2. Do something
		$account->setAccountNumber(12345);

		// 3. Make assertions

		// 寬鬆比對
		$this->assertEquals(1, $account->getAccountNumber());

		// 嚴格比對
		$this->assertSame(12345, $account->getAccountNumber());
	}

	/** @test */
	public function an_account_can_be_related_to_a_user(): void
	{
		// Setup
		$account = new \App\Account();
		$user = new \App\User();

		// Do something
		$account->setUser($user);

		// Make assertions
		$this->assertSame($user, $account->getUser());
	}
}

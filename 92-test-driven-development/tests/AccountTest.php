<?php

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
		$account->setAccountNumber(1);

		// 3. Make assertions
		$this->assertEquals(1, $account->getAccountNumber());
	}
}

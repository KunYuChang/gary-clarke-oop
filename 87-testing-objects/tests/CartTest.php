<?php

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
	/**
	 * @covers Cart::getNetPrice
	 */
	public function testCorrectNetPriceIsReturned(): void
	{
		$cart = new Cart();
		$cart->price = 10;
		$netPrice = $cart->getNetPrice();

		$this->assertEquals(12, $netPrice);
	}

	/**
	 * @test
	 * @covers Cart::getNetPrice
	 * 註解寫@test可以讓phpunit知道這是個測試。
	 */

	public function the_cart_tax_value_can_be_changed_statically(): void
	{
		Cart::$tax = 1.5;
		$cart = new Cart();
		$cart->price = 10;

		$this->assertEquals(15, $cart->getNetPrice());
	}
}

// vendor/bin/phpunit tests/CartTest.php
// vendor/bin/phpunit tests/CartTest.php --filter the_cart_tax_value_can_be_changed_statically
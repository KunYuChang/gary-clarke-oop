<?php

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
	/**
	 * setUp 方法是 PHPUnit 中的一種特殊方法，
	 * 用於在每個測試案例執行前進行設置。在測試中，
	 * 通常會遇到需要在每個測試案例之前進行一些初始化工作的情況，
	 * 例如設置測試環境、初始化測試物件等。
	 * setUp 方法就是用來處理這些初始化工作的地方。
	 * 
	 * 在這個測試案例中，setUp 方法被用來設置 Cart 類別的靜態屬性 $tax 的值。
	 * 靜態屬性在整個類別中都是共享的，因此這裡設置了一個預設的稅率，
	 * 即每個購物車實例的稅率都是 1.2。
	 * 
	 * 這個 setUp 方法確保了每個測試案例開始執行時，
	 * 都會先將 Cart 類別的稅率設置為預期值，
	 * 從而保證了測試的一致性和可預測性。
	 *
	 */
	protected function setUp(): void
	{
		// 在每個測試案例執行前，設置預設的稅率為 1.2
		Cart::$tax = 1.2;
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
	 * 
	 * @covers Cart::addToPrice
	 * 測試當向 Cart 物件的 addToPrice 方法傳遞錯誤的類型時是否會拋出錯誤。
	 * 
	 * 測試步驟：
	 * 1. 初始化一個 Cart 物件。
	 * 2. 將 Cart 物件的 price 屬性設置為 10。
	 * 3. 使用 expectException 方法設置預期的異常類型為 TypeError，並設置預期的錯誤訊息。
	 * 4. 呼叫 addToPrice 方法，並傳遞一個字串 'ten'，這是一個錯誤的類型，因為 addToPrice 方法預期的參數類型是整數或浮點數。
	 * 5. 斷言測試是否成功拋出了預期的異常。
	 */
	public function testWrongTypeThrowsAnError(): void
	{
		$cart = new Cart();
		$cart->price = 10;
		$this->expectException(TypeError::class);
		$this->expectExceptionMessage('must be of type int|float');

		$cart->addToPrice('ten');
	}
}

// vendor/bin/phpunit tests/CartTest.php
// vendor/bin/phpunit tests/CartTest.php --filter the_cart_tax_value_can_be_changed_statically
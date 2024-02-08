<?php

use App\Inventory;
use PHPUnit\Framework\TestCase;

class InventoryTest extends TestCase
{
	public function testAddProducts(): void
	{
		// 創建一個 ProductRepository 的模擬物件
		$mockProductsRepo = $this->createMock(\App\ProductRepository::class);

		// 創建 Inventory 的實例，並將模擬的 ProductRepository 傳入其中
		$inventory = new Inventory($mockProductsRepo);

		// 設置對 fetchProducts 方法的預期呼叫，期望它將被調用一次，
		// 並且當被調用時，將返回一個包含兩個產品的陣列
		$mockProductsRepo
			->expects($this->once())
			->method('fetchProducts')
			->willReturn([
				['id' => 1, 'name' => 'Acme Radio Knobs'],
				['id' => 2, 'name' => 'Apple iPhone'],
			]);

		// 呼叫 addProducts 方法
		$inventory->addProducts();

		// 使用 assertCount 斷言來檢查 Inventory 物件中的產品數量是否為 2
		$this->assertCount(2, $inventory->getProducts());
	}
}

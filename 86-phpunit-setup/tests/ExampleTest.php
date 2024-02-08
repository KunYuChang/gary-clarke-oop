<?php

use PHPUnit\Framework\TestCase;

// 類別名稱必需是Test結尾，這是PHPUnit的規則。
class ExampleTest extends TestCase
{
	// 1. 一定要用public，否則無法跑測試。
	// 2. 方法名稱前綴詞一定要是test。
	public function testItWorks(): void
	{
		$this->assertTrue(1 === 2);
	}
}

// 執行測試(下command)
// vendor/bin/phpunit tests/ExampleTest.php

// 查看指令
// vendor/bin/phpunit

// vendor/bin/phpunit --generate-configuration
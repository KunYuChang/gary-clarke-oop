<?php // SubClass.php

class SubClass extends BaseClass
{
	public function getParentProtectedProperty(): string
	{
		return $this->getProtectedProperty();
	}

	// private 無法被子類別使用(因程式碼會出錯，故進行註解)
	// public function getParentPrivateProperty()
	// {
	// 	return $this->privateProperty;
	// }
}

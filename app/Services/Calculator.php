<?php

namespace App\Services;

class Calculator {
	protected $currency;

	public function __construct(Currency $currency) {
		$this->currency = $currency;
	}

	public function sum($num1, $num2) {
		$sum = $num1 + $num2;

		return $sum . $this->currency->get();
	}
}
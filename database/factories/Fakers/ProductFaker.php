<?php

namespace Database\Factories\Fakers;

use Faker\Provider\Base;

class ProductFaker extends Base
{
	private static $PRODUCT_DATA;

	public function __construct()
	{
		$dataFilePath = 'database/factories/Fakers/json/ProductData.json';
		self::$PRODUCT_DATA = json_decode(file_get_contents($dataFilePath));
	}

	# Custom Properties

	public function productName(): string
	{
		return static::randomElement(self::$PRODUCT_DATA->names);
	}

	public function SQ(): string
	{
		return random_int(1000, 9999) . '-' . random_int(1000, 9999);
	}
}

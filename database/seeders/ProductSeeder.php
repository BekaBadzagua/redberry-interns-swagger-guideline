<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->store('Madara Uchiha', 500, 50, '000-0001', [1, 3]);
		$this->store('Hashirama', 300, 30, '000-0002', [1, 3]);
		$this->store('Itachi Uchiha', 100, 10, '000-0003', [2, 4]);
		$this->store('Naruto Uzumaki', 50, 10, '000-0004', [2, 4]);
		$this->store('Kakashi Hatake', 200, 10, '000-0005', [4, 6, 7]);
		$this->store('Might Guy', 700, 10, '000-0006', [8]);
		$this->store('Deidara', 150, 10, '000-0007', [6, 10]);
		$this->store('Kisame', 120, 10, '000-0008', [7, 8]);
		$this->store('Pain', 300, 10, '000-0009', [8, 9]);
	}

	private function store(
		string $name,
		int $price,
		int $wholesomePrice,
		string $sq,
		array $categpryIds = [1, 3],
		string $colors = 'red',
		string $materials = 'coolness',
		string $details = 'More information'
	): void {
		$storedProduct = Product::create([
			'name'            => $name,
			'price'           => $price,
			'wholesale_price' => $wholesomePrice,
			'SQ'              => $sq,
			'colors'          => $colors,
			'materials'       => $materials,
			'details'         => $details,
		]);
		$storedProduct->categories()->attach($categpryIds);
		$storedProduct->addMedia('database/assets/madara.jpg')->preservingOriginal()->toMediaCollection();
	}
}

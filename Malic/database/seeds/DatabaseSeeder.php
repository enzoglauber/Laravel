<?php

use Illuminate\Database\Seeder;
use Malic\Seller;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SellerSeeder::class);
    }
}

/**
* 
*/
class SellerSeeder extends Seeder
{
	public function run()
	{
		Seller::create(['name' => 'vendedor 1']);
		Seller::create(['name' => 'vendedor 2']);
	}
}
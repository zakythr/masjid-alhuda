<?php

use Illuminate\Database\Seeder;
use App\Model\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();
        Country::insert([
        	[
				'code' => 'IN',
				'name' => 'Indonesia',
				'created_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}

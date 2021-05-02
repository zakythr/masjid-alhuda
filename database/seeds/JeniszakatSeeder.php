<?php

use Illuminate\Database\Seeder;
use App\Model\Jeniszakatfitrah;

class JeniszakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jeniszakatfitrah::truncate();
        Jeniszakatfitrah::insert([
        	[
				'name' => 'Uang Tunai',
				'created_at' => date('Y-m-d H:i:s')
        	],
        	[
				'name' => 'Beras',
				'created_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}

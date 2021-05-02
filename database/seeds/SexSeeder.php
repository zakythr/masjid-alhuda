<?php

use Illuminate\Database\Seeder;
use App\Model\Sex;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sex::truncate();
        Sex::insert([
        	[
				'name' => 'Laki - laki',
				'created_at' => date('Y-m-d H:i:s')
        	],
        	[
				'name' => 'Perempuan',
				'created_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}

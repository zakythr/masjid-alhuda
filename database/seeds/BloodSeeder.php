<?php

use Illuminate\Database\Seeder;

use App\Model\BloodType;
class BloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodType::truncate();
        BloodType::insert([
        	[
				'name' => 'A',
				'created_at' => date('Y-m-d H:i:s')
        	],
        	[
				'name' => 'B',
				'created_at' => date('Y-m-d H:i:s')
        	],
        	[
				'name' => 'AB',
				'created_at' => date('Y-m-d H:i:s')
        	],
        	[
				'name' => 'O',
				'created_at' => date('Y-m-d H:i:s')
        	],
        	[
				'name' => 'A+',
				'created_at' => date('Y-m-d H:i:s')
        	],
        	[
				'name' => 'B+',
				'created_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}

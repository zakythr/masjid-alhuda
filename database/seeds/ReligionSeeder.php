<?php

use Illuminate\Database\Seeder;
use App\Model\Religion;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::truncate();
        Religion::insert([
            [
                'name' => 'Islam',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kristen',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Katholik',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hindu',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Budha',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Konghucu',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Model\MaritalStatus;

class MaritalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaritalStatus::truncate();
        MaritalStatus::insert([
            [
                'name' => 'Belum Kawin',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kawin',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cerai Hidup',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cerai Mati',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}

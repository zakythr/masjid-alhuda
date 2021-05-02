<?php

use Illuminate\Database\Seeder;
use App\Model\FamilyStatus;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FamilyStatus::truncate();
        FamilyStatus::insert([
            [
                'name' => 'Kepala Keluarga',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Suami',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Istri',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anak',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Menantu',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cucu',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Orang Tua',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mertua',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Famili Lain',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pembantu',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lainnya',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}

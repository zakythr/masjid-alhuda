<?php

use Illuminate\Database\Seeder;

use App\Model\Education;
class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::truncate();
        Education::insert([
            [
                'name' => 'Tidak / Belum Sekolah',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Belum Tamat SD / Sederajat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tamat SD / Sederajat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'SMP / Sederajat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'SMA / Sederajat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'D1 / D2',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Akademi / D3 / Sarjana Muda',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'D4 / S1',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'S2',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'S3',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}

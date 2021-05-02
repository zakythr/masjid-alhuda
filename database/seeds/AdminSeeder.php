<?php

use Illuminate\Database\Seeder;
use App\Model\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        Admin::insert([
        	[
				'name' => 'Administrator',
				'email' => 'admin@mail.com',
				'password' => bcrypt('123456'),
				'created_at' => date('Y-m-d H:i:s')
        	],
            [
                'name' => 'RT/RW',
                'email' => 'rtrw@mail.com',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}

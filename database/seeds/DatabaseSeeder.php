<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BloodSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(FamilySeeder::class);
        $this->call(JobSeeder::class);
        $this->call(MaritalSeeder::class);
        $this->call(ReligionSeeder::class);
        $this->call(SexSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(JeniszakatSeeder::class);
    }
}

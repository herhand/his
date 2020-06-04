<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@admin.com',
                'name' => 'admin',
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'S1',
                'location' => 'Jakarta',
                'skills' => 'Computer',
                'notes' => 'Seeder',
                'contactnumber' => '774345234',
                'user_type' => 'admin'
            ],

            [
                'email' => 'doctor@doctor.com',
                'name' => "doctor",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'S1',
                'location' => 'Jakarta',
                'skills' => 'Computer',
                'notes' => 'Seeder',
                'contactnumber' => '767035067',
                'user_type' => 'doctor'
            ],

            [
                'email' => 'pharmacist@pharmacist.com',
                'name' => "pharmacist",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'S1',
                'location' => 'Jakarta',
                'skills' => 'Computer',
                'notes' => 'Seeder',
                'contactnumber' => '714193432',
                'user_type' => 'pharmacist'
            ],

            [
                'email' => 'general@general.com',
                'name' => "general",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'S1',
                'location' => 'Jakarta',
                'skills' => 'Computer',
                'notes' => 'Seeder',
                'contactnumber' => '713843043',
                'user_type' => 'general'
            ],

            [
                'email' => 'user@user.com',
                'name' => "user",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'S1',
                'location' => 'Jakarta',
                'skills' => 'Computer',
                'notes' => 'Seeder',
                'contactnumber' => '703169302',
                'user_type' => 'general'
            ]
        ]);
    }
}

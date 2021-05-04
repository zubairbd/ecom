<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'MR. Admin ',
            'email' =>'admin@gmail.com',
            'password' => Hash::make('1234'),
            'phone' => '01714836029',
            'name' => 'MR. Zubair ',
            'email' =>'zubair@gmail.com',
            'password' => Hash::make('1234'),
            'phone' => '01714836029',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'MUNEZERO Melissa',
            'email' => 'melissa@gmail.com',
            'username' => 'M.Melissa',
            'roles_id' => 1,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'AMOUR CHRIST',
            'email' => 'amour@gmail.com',
            'username' => 'A.CHRIST',
            'roles_id' => 2,
            'password' => Hash::make('password'),
        ]); 

        DB::table('users')->insert([
            'name' => 'RUKUNDO M.BELYSE',
            'email' => 'rukundo@gmail.com',
            'username' => 'R.M.BELYSE',
            'roles_id' => 3,
            'password' => Hash::make('password'),
        ]); 
    }
}

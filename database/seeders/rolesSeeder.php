<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role' => 'Administrateur',
        ]);
        
        DB::table('roles')->insert([
            'role' => 'utilisateur',
        ]);

        DB::table('roles')->insert([
            'role' => 'secretaire',
        ]);
    }
}
    


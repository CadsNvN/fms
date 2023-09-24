<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HearseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hearses')->insert([
            'name' => 'Hearse 1',
            'description' => 'This is the Hearse 1',
        ]);

        DB::table('hearses')->insert([
            'name' => 'Hearse 2',
            'description' => 'This is the Hearse 2',
        ]);

        DB::table('hearses')->insert([
            'name' => 'Hearse 3',
            'description' => 'This is the Hearse 3',
        ]);

        DB::table('hearses')->insert([
            'name' => 'Hearse 4',
            'description' => 'This is the Hearse 4',
        ]);
    }
}

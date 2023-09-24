<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('caskets')->insert([
            'name' => 'Casket 1',
            'description' => 'This is the casket 1',
            'price' => 15000,
            'stock' => 5,
        ]);

        DB::table('caskets')->insert([
            'name' => 'Casket 2',
            'description' => 'This is the casket 2',
            'price' => 17000,
            'stock' => 5,
        ]);

        DB::table('caskets')->insert([
            'name' => 'Casket 3',
            'description' => 'This is the casket 3',
            'price' => 18000,
            'stock' => 5,
        ]);

        DB::table('caskets')->insert([
            'name' => 'Casket 4',
            'description' => 'This is the casket 4',
            'price' => 23000,
            'stock' => 5,
        ]);

        DB::table('caskets')->insert([
            'name' => 'Casket 5',
            'description' => 'This is the casket 5',
            'price' => 70000,
            'stock' => 5,
        ]);
    }
}

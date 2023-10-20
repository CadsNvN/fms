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
            'name' => 'Arrabieskie',
            'description' => 'Half glass wood casket, Single door',
            'price' => 35000,
            'stock' => 5,
            'is_available' => true,
            'category_id' => 1,
        ]);

        DB::table('caskets')->insert([
            'name' => 'Jr. Lizo',
            'description' => 'Full glass wood casket, Single door',
            'price' => 60000,
            'stock' => 5,
            'is_available' => true,
            'category_id' => 1,
        ]);

        DB::table('caskets')->insert([
            'name' => 'JRMFG Jr.',
            'description' => 'Metal casket full glass',
            'price' => 85000,
            'stock' => 5,
            'is_available' => true,
            'category_id' => 1,
        ]);

        DB::table('caskets')->insert([
            'name' => 'SRMFG Sr.',
            'description' => 'Metal casket full glass',
            'price' => 95000,
            'stock' => 5,
            'is_available' => true,
            'category_id' => 1,
        ]);

        DB::table('caskets')->insert([
            'name' => 'MBT',
            'description' => 'Metal casket bubble top',
            'price' => 140000,
            'stock' => 5,
            'is_available' => true,
            'category_id' => 1,
        ]);

        DB::table('caskets')->insert([
            'name' => 'Batesville',
            'description' => 'Metal Casket, Single Top (half lid cover), Half Glass, Elegant Interiors, corners and handles',
            'price' => 500000,
            'stock' => 5,
            'is_available' => true,
            'category_id' => 1,
        ]);
    }
}

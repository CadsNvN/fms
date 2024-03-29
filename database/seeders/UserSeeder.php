<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert(
            [
                'email' => 'admin@email.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ]
        );

        DB::table('users')->insert(
            [
                'email' => 'owner@email.com',
                'password' => Hash::make('owner'),
                'role' => 'owner',
            ]
        );

        DB::table('users')->insert(
            [
                'email' => 'customer@email.com',
                'password' => Hash::make('customer'),
                'role' => 'customer',
            ]
        );
    }
}

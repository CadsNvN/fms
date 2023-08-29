<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert(
            [
                'user_id' => 1, // 'admin' user
                'firstName' => 'Admin',
                'lastName' => 'Admin',
                'middleName' => 'A.',
                'phoneNumber' => '09123456789',
                'address' => 'Bacoor Cavite'
            ]
        );

        DB::table('profiles')->insert(
            [
                'user_id' => 2, // 'owner' user
                'firstName' => 'Owner',
                'lastName' => 'Owner',
                'middleName' => 'O.',
                'phoneNumber' => '09123456789',
                'address' => 'Bacoor Cavite'
            ]
        );

        DB::table('profiles')->insert(
            [
                'user_id' => 3, // 'customer' user
                'firstName' => 'Customer',
                'lastName' => 'Customer',
                'middleName' => 'C.',
                'phoneNumber' => '09123456789',
                'address' => 'Bacoor Cavite'
            ]
        );
    }
}

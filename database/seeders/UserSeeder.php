<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Pista Nagy',
                    'balance' => 50000,
                    'email' => 'nagy.pista@greenitica.local'
                ],
                [
                    'name' => 'Agota Lakatos',
                    'balance' => 200,
                    'email' => 'agotalakatos@greenitical.local'
                ]
            ]
        );
    }
}

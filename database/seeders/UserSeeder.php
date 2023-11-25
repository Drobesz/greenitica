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
                    'id' => 1,
                    'name' => 'Pista Nagy',
                    'balance' => 100,
                    'email' => 'nagy.pista@greenitica.local'
                ],
                [
                    'id' => 2,
                    'name' => 'Agota Lakatos',
                    'balance' => 100,
                    'email' => 'agotalakatos@greenitical.local'
                ]
            ]
        );
    }
}

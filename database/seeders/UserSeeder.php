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
                    'balance' => 14635,
                    'email' => 'nagy.pista@greenitica.local'
                ],
                [
                    'name' => 'Agota Lakatos',
                    'balance' => 200,
                    'email' => 'agotalakatos@greenitical.local'
                ],
                [
                    'name' => 'Mariann Kovacs',
                    'balance' => 200,
                    'email' => 'mariannkovacs@greenitical.local'
                ],
                [
                    'name' => 'Norbert Hegyi',
                    'balance' => 200,
                    'email' => 'norberthegyi@greenitical.local'
                ],
            ]
        );
    }
}

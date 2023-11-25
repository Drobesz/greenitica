<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert(
            [
                [
                    'id' => 1,
                    'user_id' => 1,
                    'partner_id' => 3,
                    'amount' => 10000,
                    'category' => 'Groceries',
                    'date' => '2021-01-08 12:01:01',
                    'carbon_token' => 120
                ],
                [
                    'id' => 2,
                    'user_id' => 1,
                    'partner_id' => 1,
                    'amount' => 30000,
                    'category' => 'Transportation',
                    'date' => '2022-10-01 12:01:11',
                    'carbon_token' => 1500
                ],
                [
                    'id' => 3,
                    'user_id' => 1,
                    'partner_id' => 3,
                    'amount' => 4000,
                    'category' => 'Groceries',
                    'date' => '2023-01-02 20:46:01',
                    'carbon_token' => 48
                ],
                [
                    'id' => 4,
                    'user_id' => 1,
                    'partner_id' => 1,
                    'amount' => 220000,
                    'category' => 'Transportation',
                    'date' => '2023-01-04 8:11:01',
                    'carbon_token' => 11000
                ],
                [
                    'id' => 5,
                    'user_id' => 1,
                    'partner_id' => 4,
                    'amount' => 10000,
                    'category' => 'Groceries',
                    'date' => '2023-01-06 17:44:41',
                    'carbon_token' => 250
                ],
                [
                    'id' => 6,
                    'user_id' => 1,
                    'partner_id' => 2,
                    'amount' => 10000,
                    'category' => 'Gardening',
                    'date' => '2023-01-07 7:01:01',
                    'carbon_token' => 150
                ],
                [
                    'id' => 7,
                    'user_id' => 1,
                    'partner_id' => 4,
                    'amount' => 5000,
                    'category' => 'Groceries',
                    'date' => '2023-01-09 12:01:01',
                    'carbon_token' => 0
                ],
                [
                    'id' => 8,
                    'user_id' => 1,
                    'partner_id' => 1,
                    'amount' => 30000,
                    'category' => 'Transportation',
                    'date' => '2023-01-10 12:01:01',
                    'carbon_token' => 1500
                ],
                [
                    'id' => 9,
                    'user_id' => 1,
                    'partner_id' => 2,
                    'amount' => 1000,
                    'category' => 'Gardening',
                    'date' => '2023-09-17 12:01:01',
                    'carbon_token' => 15
                ],
                [
                    'id' => 10,
                    'user_id' => 1,
                    'partner_id' => 4,
                    'amount' => 2100,
                    'category' => 'Groceries',
                    'date' => '2024-10-05 10:01:01',
                    'carbon_token' => 52
                ]
            ]
        );
    }
}

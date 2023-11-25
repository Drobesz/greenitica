<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'BKK',
                    'is_elevated' => true,
                    'percentage' => 0.06,
                    'image' => ''
                ],
                [
                    'id' => 2,
                    'name' => 'Oasis Gardening',
                    'is_elevated' => true,
                    'percentage' => 0.05,
                    'image' => ''
                ],
                [
                    'id' => 3,
                    'name' => 'SPAR',
                    'is_elevated' => false,
                    'percentage' => 0.04,
                    'image' => ''
                ],
                [
                    'id' => 4,
                    'name' => 'CBA',
                    'is_elevated' => false,
                    'percentage' => 0.04,
                    'image' => ''
                ],
                [
                    'id' => 5,
                    'name' => 'Granit bank',
                    'is_elevated' => false,
                    'percentage' => 0.04,
                    'image' => ''
                ],
            ]
        );
    }
}

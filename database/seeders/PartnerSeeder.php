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
                    'name' => 'VKB',
                    'is_elevated' => true,
                    'percentage' => 0.06,
                    'image' => ''
                ],
                [
                    'id' => 2,
                    'name' => 'SISOA',
                    'is_elevated' => true,
                    'percentage' => 0.05,
                    'image' => ''
                ],
                [
                    'id' => 3,
                    'name' => 'RAPS',
                    'is_elevated' => false,
                    'percentage' => 0.04,
                    'image' => ''
                ],
                [
                    'id' => 4,
                    'name' => 'ABC',
                    'is_elevated' => false,
                    'percentage' => 0.04,
                    'image' => ''
                ],
            ]
        );
    }
}

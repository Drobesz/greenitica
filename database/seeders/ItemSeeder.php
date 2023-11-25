<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                "id" => 1,
                "name" => "monthly budapest pass for pupils from VKB",
                "price" => 12500,
                "image" => ""
            ],
            [
                "id" => 2,
                "name" => "voucher for butchery in RAPS",
                "price" => 1000,
                "image" => ""
            ],
            [
                "id" => 3,
                "name" => "no account management fee for 6 months at TRINARG",
                "price" => 20000,
                "image" => ""
            ],
            [
                "id" => 4,
                "name" => "free birsch sapling from SISOA Gardening",
                "price" => 5000,
                "image" => ""
            ],
            [
                "id" => 5,
                "name" => "Free breakfast menu at RASP Cafeteria",
                "price" => 8000,
                "image" => ""
            ]
        ]);
    }
}

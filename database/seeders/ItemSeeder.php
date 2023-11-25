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
                "name" => "Monthly Budapest pass",
                "partner_id" => 1,
                "price" => 12500,
                "image" => "images/bkklogo.jpg"
            ],
            [
                "id" => 2,
                "name" => "Voucher for butchery",
                "partner_id" => 3,
                "price" => 1000,
                "image" => "images/sparlogo.png"
            ],
            [
                "id" => 3,
                "name" => "No account management fee for 6 months",
                "partner_id" => 5,
                "price" => 20000,
                "image" => "images/granitlogo.jpg"
            ],
            [
                "id" => 4,
                "name" => "Free birch sapling",
                "partner_id" => 2,
                "price" => 5000,
                "image" => "images/oasislogo.jpg"
            ],
            [
                "id" => 5,
                "name" => "Free breakfast menu",
                "price" => 3000,
                "partner_id" => 3,
                "image" => "images/sparlogo.png"
            ],
            [
                "id" => 6,
                "name" => "Free Euro account",
                "price" => 5000,
                "partner_id" => 3,
                "image" => "images/granitlogo.jpg"
            ]
        ]);
    }
}

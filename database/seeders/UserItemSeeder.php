<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_items')->insert(
            [
                [
                    "id" => 1,
                    "item_id" => 1,
                    "from_user_id" => 1,
                    "recipient_user_id" => 1,
                    "is_redeemed" => true,
                    "is_gifted" => false,
                    "qr_code" => ""
                ],
                [
                    "id" => 2,
                    "item_id" => 2,
                    "from_user_id" => 1,
                    "recipient_user_id" => 2,
                    "is_redeemed" => false,
                    "is_gifted" => true,
                    "qr_code" => ""
                ],
                [
                    "id" => 3,
                    "item_id" => 3,
                    "from_user_id" => 1,
                    "recipient_user_id" => 1,
                    "is_redeemed" => false,
                    "is_gifted" => false,
                    "qr_code" => ""
                ],
                [
                    "id" => 4,
                    "item_id" => 4,
                    "from_user_id" => 1,
                    "recipient_user_id" => 2,
                    "is_redeemed" => false,
                    "is_gifted" => true,
                    "qr_code" => ""
                ],
                [
                    "id" => 5,
                    "item_id" => 4,
                    "from_user_id" => 1,
                    "recipient_user_id" => 1,
                    "is_redeemed" => false,
                    "is_gifted" => false,
                    "qr_code" => ""
                ]
            ]
        );
    }
}

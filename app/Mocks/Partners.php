<?php

namespace App\Mocks;
class Partners
{
    public static function get(): array
    {
        return [
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
                'id' => 3,
                'name' => 'ABC',
                'is_elevated' => false,
                'percentage' => 0.04,
                'image' => ''
            ],
        ];
    }
}

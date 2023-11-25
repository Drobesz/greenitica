<?php

namespace App\Mocks;
class Users
{
    public static function get(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Kovács József',
                'email' => 'kovacs.jozsef@greenitica.local',
                'balance' => 100,
            ],
        ];
    }
}

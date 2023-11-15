<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypesSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            [
                'id' => 1,
                'name' => 'Single Room',
            ],
            [
                'id' => 2,
                'name' => 'Double Room',
            ],
            [
                'id' => 3,
                'name' => 'Deluxe Room',
            ],
            [
                'id' => 4,
                'name' => 'Suite',
            ],
            [
                'id' => 5,
                'name' => 'Presidential Suite',
            ],
        ];

        foreach ($types as $type) {
            RoomType::updateOrCreate([
                'id' => $type['id']
            ], [
                'name' => $type['name'],
            ]);
        }
    }
}

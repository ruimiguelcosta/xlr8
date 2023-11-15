<?php

namespace Database\Seeders;

use App\Models\RoomPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomPricesSeeder extends Seeder
{
    public function run(): void
    {
        $prices = [
            [
                'id' => 1,
                'room_id' => 1,
                'start_at' => '2023-11-01',
                'end_at' => '2023-11-31',
                'price' => '100',
            ],
            [
                'id' => 2,
                'room_id' => 1,
                'start_at' => '2023-11-31',
                'end_at' => '2023-12-23',
                'price' => '85',
            ],
            [
                'id' => 3,
                'room_id' => 1,
                'start_at' => '2023-12-23',
                'end_at' => '2024-01-02',
                'price' => '230',
            ],
            [
                'id' => 4,
                'room_id' => 2,
                'start_at' => '2023-11-01',
                'end_at' => '2023-11-31',
                'price' => '100',
            ],
            [
                'id' => 5,
                'room_id' => 2,
                'start_at' => '2023-11-31',
                'end_at' => '2023-12-23',
                'price' => '85',
            ],
            [
                'id' => 6,
                'room_id' => 2,
                'start_at' => '2023-12-23',
                'end_at' => '2024-01-02',
                'price' => '299.99',
            ],
            [
                'id' => 7,
                'room_id' => 4,
                'start_at' => '2023-11-01',
                'end_at' => '2023-11-31',
                'price' => '55',
            ],
            [
                'id' => 8,
                'room_id' => 4,
                'start_at' => '2023-11-31',
                'end_at' => '2023-12-23',
                'price' => '110',
            ],
            [
                'id' => 9,
                'room_id' => 4,
                'start_at' => '2023-12-23',
                'end_at' => '2024-01-02',
                'price' => '115.50',
            ],
            [
                'id' => 10,
                'room_id' => 5,
                'start_at' => '2023-11-01',
                'end_at' => '2023-11-31',
                'price' => '50',
            ],
            [
                'id' => 11,
                'room_id' => 5,
                'start_at' => '2023-11-31',
                'end_at' => '2023-12-23',
                'price' => '65',
            ],
            [
                'id' => 12,
                'room_id' => 5,
                'start_at' => '2023-12-23',
                'end_at' => '2024-01-02',
                'price' => '90',
            ],
        ];

        foreach ($prices as $price) {
            RoomPrice::updateOrCreate([
                'id' => $price['id']
            ], [
                'room_id' => $price['id'],
                'start_at' => $price['start_at'],
                'end_at' => $price['end_at'],
                'price' => $price['price'],
            ]);
        }
    }
}

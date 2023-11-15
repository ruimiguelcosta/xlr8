<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = [
            [
                'id' => 1,
                'property_id' => 1,
                'room_type_id' => 1,
                'number_of_rooms' => 4,
            ],
            [
                'id' => 2,
                'property_id' => 1,
                'room_type_id' => 4,
                'number_of_rooms' => 2,
            ],
            [
                'id' => 3,
                'property_id' => 1,
                'room_type_id' => 5,
                'number_of_rooms' => 3,
            ],
            [
                'id' => 4,
                'property_id' => 2,
                'room_type_id' => 4,
                'number_of_rooms' => 25
            ],
            [
                'id' => 5,
                'property_id' => 2,
                'room_type_id' => 2,
                'number_of_rooms' => 10
            ],
        ];

        foreach ($rooms as $room) {
            Room::updateOrCreate([
                'id' => $room['id']
            ], [
                'property_id' => $room['property_id'],
                'room_type_id' => $room['room_type_id'],
                'number_of_rooms' => $room['number_of_rooms'],
            ]);

        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        $properties = [
            [
                'id' => 1,
                'name' => 'Hotel Boavista',
                'city' => 'Porto',
                'image' => 'hotel-4.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Hotel Resort & Spa',
                'city' => 'Cascais',
                'image' => 'hotel-3.jpg',
            ],
        ];

        foreach ($properties as $property) {
            Property::updateOrCreate([
                'id' => $property['id']
            ], [
                'name' => $property['name'],
                'city' => $property['city'],
                'image' => $property['image'],
            ]);
        }
    }
}

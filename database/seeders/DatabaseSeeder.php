<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PropertySeeder::class,
            RoomTypesSeeder::class,
            RoomsSeeder::class,
            RoomPricesSeeder::class,
        ]);
    }
}

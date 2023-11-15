<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Rui Costa',
                'email' => 'admin@admin.com',
                'password' => Hash::make('secret'),
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate([
                'id' => $user['id']
            ], [
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);

            $u = User::find($user['id']);
            $u->markEmailAsVerified();
            $u->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(
            [
                'name' => "Babul Mirdha",
                'email' => "babumirdha@gmail.com",
                'email_verified_at' => now(),
                'password' => Hash::make('bm@1123'), // password
                'remember_token' => Str::random(10),
            ]
        );

        User::factory(10)->create();

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => "admin",
                'role' => "admin",
                'email' => "admin@test.com",
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60)
            ],
            [
                'name' => "user",
                'role' => "user",
                'email' => "user@test.com",
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
                'created_at' => new \DateTime
            ]
        ];

        DB::table('users')->insert($user);
    }
}

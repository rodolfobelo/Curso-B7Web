<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreatedUserAndAddAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => "Yara Azevedo Belo",
            "email" => "yara.azevedo87@gmail.com",
            "password" => Hash::make("123456"),
            "email_verified_at" => "12/10/2019",
        ]);

        DB::table('addresses')->insert([
            "address" => "Rua dos bobos, n° 0",
            "users_id" => 1,
        ]);
    }
}

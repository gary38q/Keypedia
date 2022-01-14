<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            ["User_Name" => "Admin",
            "Email" => "Admin@yahoo.com",
            "Address" => "Rumah Admin yang Sebenarnya",
            "Gender" => "Admin",
            "HBD" => "2001-01-01",
            "Password" => Hash::make("Admin123"),
            "Role" => "Admin"]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ["Category_Name" => "87 Key Keyboard",
             "Category_Image" => "image/87-Key.jpg"],

             ["Category_Name" => "61 Key Keyboard",
             "Category_Image" => "image/61-Key.jpg"],

             ["Category_Name" => "XDA Profile",
             "Category_Image" => "image/xda-profile.jpg"],
             
             ["Category_Name" => "Cherry Profile",
             "Category_Image" => "image/cherry-profile.jpg"],
             
        ]);
    }
}

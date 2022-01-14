<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     
    public function run()
    {
        DB::table('keyboards')->insert([
            ["Category_ID" => "2",
             "Keyboard_Name" => "Geek Disesuaikan GK61 Keyboard",
             "Keyboard_Price" => 800000,
             "Description" => "Geek Disesuaikan GK61 Keyboard",
             "Image_Link" => "image/61-Key1.jpg"],

             ["Category_ID" => "2",
             "Keyboard_Name" => "Royal Kludge RK61",
             "Keyboard_Price" => 800000,
             "Description" => "Keyboard Mekanik 61 Tombol bluetooth 5.0 Kabel Dual Mode RGB Gaming Keyboard",
             "Image_Link" => "image/61-Key2.jpg"],

             ["Category_ID" => "2",
             "Keyboard_Name" => "GamaKay K61 Keyboard Mekanik 61",
             "Keyboard_Price" => 800000,
             "Description" => "Keyboard Mekanik 61 Tombol 60 Keyboard Hot Swappable Type-C 3.1 Kabel USB Dasar Kaca Tembus Gateron Switch ABS Dua Warna Keycap NKRO RGB Gaming",
             "Image_Link" => "image/61-Key3.jpg"],

             ["Category_ID" => "2",
             "Keyboard_Name" => "61 Tombol Putih & Abu-abu",
             "Keyboard_Price" => 800000,
             "Description" => "61 Tombol Putih & Abu-abu Keycap Set Profil OEM PBT Tebal Tata Letak ANSI Keycaps untuk 60% Keyboard Mekanik",
             "Image_Link" => "image/61-Key4.jpg"],

             ["Category_ID" => "2",
             "Keyboard_Name" => "[Gateron Switch] Anne Pro 2 Keyboard",
             "Keyboard_Price" => 800000,
             "Description" => "Mekanik 61 Tombol 60% NKRO bluetooth 4.0/5.0 Type-C RGB Gaming Keyboard - Hitam Brown Switch",
             "Image_Link" => "image/61-Key.jpg"],

             ["Category_ID" => "1",
             "Keyboard_Name" => "GamaKay K87 Keyboard Mekanik",
             "Keyboard_Price" => 800000,
             "Description" => "Keyboard Mekanik 87 Tombol Hot Swappable Type-C Kabel USB 3.1 NKRO Tembus Dasar Kaca Gateron Switch ABS Dua-warna Keycap Keyboard Gaming RGB",
             "Image_Link" => "image/87-Key1.jpg"],

             ["Category_ID" => "1",
             "Keyboard_Name" => "BlitzWolf® BW-KB2",
             "Keyboard_Price" => 800000,
             "Description" => "Keyboard Mekanik 87 Tombol Keyboard Berkabel Gateron Optical Switch Hot Swappable RGB NKRO Type-C Keyboard Gaming",
             "Image_Link" => "image/87-Key.jpg"],

             ["Category_ID" => "1",
             "Keyboard_Name" => "HYEKU GK707 87 Key",
             "Keyboard_Price" => 800000,
             "Description" => "HYEKU GK707 87 Key Mechanical Gaming Keyboard ABS Cap Kailh Switch",
             "Image_Link" => "image/87-Key3.jpg"],

             ["Category_ID" => "1",
             "Keyboard_Name" => "BAJEAL K100 Keyboard Mekanik",
             "Keyboard_Price" => 800000,
             "Description" => "eyboard Mekanik Berkabel 87 Tombol Pelangi Lampu Latar Biru Swtich Hot Swappable Desain Ganda Warna Keyboard Gaming Dengan Efek Pencahayaan LED untuk Gaming Mengetik Kantor",
             "Image_Link" => "image/87-Key2.jpg"],

             ["Category_ID" => "1",
             "Keyboard_Name" => "Tecware Phantom 87 Key",
             "Keyboard_Price" => 800000,
             "Description" => "Tecware Phantom 87 Key RGB led Outemu Brown Switch Mechanical Keyboard",
             "Image_Link" => "image/87-Key4.jpg"],

             ["Category_ID" => "3",
             "Keyboard_Name" => "128 Kunci Coral Sea Keycap Set XDA Profil",
             "Keyboard_Price" => 800000,
             "Description" => "128 Kunci Coral Sea Keycap Set XDA Profil PBT Sublimasi Keycaps untuk DIY Keyboard Mekanik",
             "Image_Link" => "image/xda-profile1.jpg"],
             
             ["Category_ID" => "3",
             "Keyboard_Name" => "126 Tombol Putih & Merah Muda PBT Keycap Set XDA Profil",
             "Keyboard_Price" => 800000,
             "Description" => "126 Tombol Putih & Merah Muda PBT Keycap Set XDA Profil Sublimasi Tombol Kustom Jepang untuk Keyboard Mekanik",
             "Image_Link" => "image/xda-profile2.jpg"],

             ["Category_ID" => "3",
             "Keyboard_Name" => "120 Tombol Kunci Segel Derek Set Profil XDA",
             "Keyboard_Price" => 800000,
             "Description" => "120 Tombol Kunci Segel Derek Set Profil XDA PBT Lima Sisi Tombol Sublimasi untuk Keyboard Mekanis",
             "Image_Link" => "image/xda-profile.jpg"],

             ["Category_ID" => "3",
             "Keyboard_Name" => "120 Tombol Set Tombol Gaya Cina Profil XDA",
             "Keyboard_Price" => 800000,
             "Description" => "120 Tombol Set Tombol Gaya Cina Profil XDA PBT Tombol Sublimasi Lima Sisi untuk Keyboard Mekanis",
             "Image_Link" => "image/xda-profile3.jpg"],

             ["Category_ID" => "3",
             "Keyboard_Name" => "109 Tombol Color Matching Keycap Set Profil XDA",
             "Keyboard_Price" => 800000,
             "Description" => "109 Tombol Color Matching Keycap Set Profil XDA Tombol Sublimasi PBT untuk Keyboard Mekanik - biru & putih",
             "Image_Link" => "image/xda-profile4.jpg"],

             ["Category_ID" => "4",
             "Keyboard_Name" => "128 Kunci Bunga Sakura Keycap Set Cherry Profil",
             "Keyboard_Price" => 800000,
             "Description" => "128 Kunci Bunga Sakura Keycap Set Cherry Profil PBT Lima Sisi Sublimasi Gunung Fuji Sakura Bunga Merah Muda Keycaps untuk Keyboard Mekanik",
             "Image_Link" => "image/cherry-profile.jpg"],
             
             ["Category_ID" => "4",
             "Keyboard_Name" => "135 Kunci BUSHIDO PBT Keycap Set Cherry Profil",
             "Keyboard_Price" => 800000,
             "Description" => "135 Kunci BUSHIDO PBT Keycap Set Cherry Profil Sublimasi Lima Sisi Jepang Kustom Keycaps untuk Keyboard Mekanik",
             "Image_Link" => "image/cherry-profile1.jpg"],

             ["Category_ID" => "4",
             "Keyboard_Name" => "137 Kunci Botanic Garden Keycap Set Cherry Profil",
             "Keyboard_Price" => 800000,
             "Description" => "137 Kunci Botanic Garden Keycap Set Cherry Profil Sublimasi PBT Keycaps untuk Keyboard Mekanik",
             "Image_Link" => "image/cherry-profile2.jpg"],

             ["Category_ID" => "4",
             "Keyboard_Name" => "121 Tombol Sushi PBT Keycap Set Cherry Profil",
             "Keyboard_Price" => 800000,
             "Description" => "121 Tombol Sushi PBT Keycap Set Cherry Profil Sublimasi Tombol Kustom Jepang untuk Keyboard Mekanik",
             "Image_Link" => "image/cherry-profile3.jpg"],

             ["Category_ID" => "4",
             "Keyboard_Name" => "140 Kunci Astronot Keycap Set Cherry Profil",
             "Keyboard_Price" => 800000,
             "Description" => "140 Kunci Astronot Keycap Set Cherry Profil PBT Sublimasi DIY Keycaps Kustom untuk Keyboard Mekanik",
             "Image_Link" => "image/cherry-profile4.jpg"],
        ]);
    }
}

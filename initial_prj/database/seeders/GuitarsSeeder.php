<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuitarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents('placeholder_guitars.json', true);
        $data = json_decode($json, true);

        foreach ($data as $data) {
            DB::table("Guitars")->insert([
                "name" => $data['name'],
                "description" => $data['description'],
                "price" => $data["price"],
                "available" => $data["available"],
                "image" => $data["image"],
            ]);
        }
    }
}

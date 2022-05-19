<?php

namespace Database\Seeders;

use App\Models\Map;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(public_path("data/map-data.json"));
        $maps = json_decode($json);

        foreach ($maps->maps as $key => $value) {
            Map::create([
                "name" => $value->name,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\WeaponType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class WeaponTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(public_path("data/weapontype-data.json"));
        $weaponType = json_decode($json);

        foreach ($weaponType->weaponType as $key => $value) {
            WeaponType::create([
                "type" => $value->type,
            ]);
        }
    }
}

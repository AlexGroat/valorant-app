<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(public_path("data/weapon-data.json"));
        $weapon = json_decode($json);

        foreach ($weapon->weapons as $key => $value) {
            Weapon::create([
                "name" => $value->name,
                "bio" => $value->bio,
                "description" => $value->description,
                "weapon_type" => $value->weapon_type
            ]);
        }
    }
}

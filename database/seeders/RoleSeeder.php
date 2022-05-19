<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(public_path("data/role-data.json"));
        $roles = json_decode($json);

        foreach ($roles->roles as $key => $value) {
            Role::create([
                "name" => $value->name,
            ]);
        }
    }
}

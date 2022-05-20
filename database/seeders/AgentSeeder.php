<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class AgentSeeder extends Seeder
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
            Agent::create([
                "name" => $value->name,
                "bio" => $value->bio,
                "role_id" => $value->role_id,
                "name" => $value->name,
                "name" => $value->name,
                "name" => $value->name,
                "name" => $value->name,
                "name" => $value->name,
            ]);
        }
    }
}

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
        $json = File::get(public_path("data/agent-data.json"));
        $agents = json_decode($json);

        foreach ($agents->agents as $key => $value) {
            Agent::create([
                "name" => $value->name,
                "bio" => $value->bio,
                "role_id" => $value->role_id,
                "ability_1_title" => $value->ability_1_title,
                "ability_1_description" => $value->ability_1_description,
                "ability_2_title" => $value->ability_2_title,
                "ability_2_description" => $value->ability_2_description,
                "ability_3_title" => $value->ability_3_title,
                "ability_3_description" => $value->ability_3_description,
                "ultimate_title" => $value->ultimate_title,
                "ultimate_description" => $value->ultimate_description,
            ]);
        }
    }
}

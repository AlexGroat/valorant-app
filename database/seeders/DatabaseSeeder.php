<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MapSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AgentSeeder::class);      
        $this->call(WeaponTypeSeeder::class);
        $this->call(WeaponSeeder::class);
    }
}

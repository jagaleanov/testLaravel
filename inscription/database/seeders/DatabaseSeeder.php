<?php

namespace Database\Seeders;

use Database\Seeders\RolSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\PhaseSeeder;
use Database\Seeders\CountrySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        $this->call(PhaseSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(RunnerSeeder::class);
        $this->call(ShirtSeeder::class);
        $this->call(InscriptionSeeder::class);
    }
}

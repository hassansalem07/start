<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Manager;
use Database\Factories\ManagerFactory;
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
        // \App\Models\User::factory(10)->create();


        $this->call([

            CompanySeeder::class,
            ManagerSeeder::class,
            // Company::factory(20)->create(),
            // Manager::factory(20)->create(),
        ]);




    }
}

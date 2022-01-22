<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Checkout;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PackageTableSeeder::class,
            PackageBenefitTableSeeder::class,
            AdminUserSeeder::class
        ]);
        // User::factory(9)->create();
        // Checkout::factory(15)->create();
    }
}

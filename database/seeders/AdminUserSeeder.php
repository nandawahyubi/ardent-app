<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@ardent.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password'  => bcrypt('adminardent'),
            'no_telp'   => '081354673398',
            'address'   => 'Komplek Cemara Asri Jl. Boulevard Timur No.88G',
            'is_admin'  => true
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                "title" => "Signature Nano Ceramic Coating",
                "slug"  => "signature-nano-ceramic-coating",
                "price" => 500,
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time()),
            ],
            [
                "title" => "Signature Nano Crystal Based Coating",
                "slug"  => "signature-nano-crystal-based-coating",
                "price" => 500,
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time()),
            ],
            [
                "title" => "Signature Diamond Coating",
                "slug"  => "signature-diamond-coating",
                "price" => 500,
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time()),
            ],
        ];

        Package::insert($packages);
    }
}

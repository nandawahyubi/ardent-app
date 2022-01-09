<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PackageBenefit;

class PackageBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packageBenefits = [
            [
                "package_id" => 1,
                "name"       => "Ketahanan Coating 3 Year, 1 Year Warranty"
            ],
            [
                "package_id" => 1,
                "name"       => "Fitur Coating Glossy, Warna Lebih Terangkat & Hydrophobic"
            ],
            [
                "package_id" => 1,
                "name"       => "Area Coating : Semua Bagian Exterior"
            ],
            [
                "package_id" => 1,
                "name"       => "Detailing Exterior & Paint Correction 3 Steps"
            ],
            [
                "package_id" => 1,
                "name"       => "Interior & Machine Bay Detailing"
            ],
            [
                "package_id" => 1,
                "name"       => "Finishing"
            ],
            [
                "package_id" => 2,
                "name"       => "Ketahanan Coating 3-5 Year, 2 Year Warranty"
            ],
            [
                "package_id" => 2,
                "name"       => "Fitur Coating Super Glossy (Seperti Kaca) & Hydrophobic"
            ],
            [
                "package_id" => 2,
                "name"       => "Area Coating: Semua Bagian Exterior & Bagian Interior Yang Berbahan Kulit"
            ],
            [
                "package_id" => 2,
                "name"       => "Detailing Exterior & Paint Correction 3 Steps"
            ],
            [
                "package_id" => 2,
                "name"       => "Interior & Machine Bay Detailing"
            ],
            [
                "package_id" => 2,
                "name"       => "Finishing"
            ],
            [
                "package_id" => 3,
                "name"       => "Ketahanan Coating 5 Year, 3 Year Warranty"
            ],
            [
                "package_id" => 3,
                "name"       => "Fitur coating Warna Cat Terlihat Basah (Wetlook), Glossy, Deep & Hydrophobic"
            ],
            [
                "package_id" => 3,
                "name"       => "Area Coating: Semua Bagian Exterior & Bagian Interior Yang Berbahan Kulit"
            ],
            [
                "package_id" => 3,
                "name"       => "Detailing Exterior & Paint Correction 3 steps"
            ],
            [
                "package_id" => 3,
                "name"       => "Interior & Machine Bay Detailing"
            ],
            [
                "package_id" => 3,
                "name"       => "Finishing"
            ],
        ];

        PackageBenefit::insert($packageBenefits);
    }
}

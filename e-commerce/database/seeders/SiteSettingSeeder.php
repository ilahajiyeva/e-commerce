<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name' => "address",
            'data' => "Bakı, Azərbaycan",
        ]);

        SiteSetting::create([
            'name' => "phone",
            'data' => "0505555555",
        ]);

        SiteSetting::create([
            'name' => "email",
            'data' => "test@domain.com",
        ]);

        SiteSetting::create([
            'name' => "map",
            'data' => null,
        ]);

    }
}

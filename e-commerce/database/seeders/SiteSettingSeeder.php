<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::create([
            'name' => 'address',
            'data' => 'Bakı, Azərbaycan'
        ]);
        SiteSetting::create([
            'name' => 'phone',
            'data' => '+994 222 22 22'
        ]);
        SiteSetting::create([
            'name' => 'email',
            'data' => 'eticaret@test.com'
        ]);
        SiteSetting::create([
            'name' => 'map',
            'data' => 'Xəritədə bax'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::create([
            'title' => 'Biz Kimik?',
            'description' => "Haqqımızda...",
            'text_1' => "Pulsuz Çatdırılma",
            'text_1_icon' => "icon-truck",
            'text_1_content' => "Məhsullarımızı pulsuz çatdırılma ilə əldə et.",
            'text_2' => "Geri qaytarma",
            'text_2_icon' => "icon-refresh2",
            'text_2_content' => "30 gün ərzində məhsulları geri qaytarma.",
            'text_3' => "Dəstək",
            'text_3_icon' => "icon-help",
            'text_3_content' => "7/24 bizimlə əlaqə.",

        ]);
    }
}

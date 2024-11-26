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
            'title' => "By Ilaha Hajiyeva",
            'image' => null,
            'content' => "Haqqimizda 2024",
            'text_1_icon' => "icon-truck",
            'text_1_title' => "Pulsuz Karqo",
            'text_1_content' => "Sifarişlərinizin pulsuz çatdırılması.",
            'text_2_icon' => "icon-refresh2",
            'text_2_title' => "Geri Qaytarılma",
            'text_2_content' => "Sifarişlərinizin 30 gün içərisində geri qaytarılması.",
            'text_3_icon' => "icon-help",
            'text_3_title' => "Dəstək",
            'text_3_content' => "7/24 bizimlə əlaqə."
        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{

    public function run(): void
    {
        Slider::create([
            'title' => "Ən Mükəmməl Ayaqqabını Tap",
            'description' => "E-Ticarət saytımıza xoş gəlmişsiniz.",
            'image' => "https://fakeimg.pl/250x100/",
            'link' => "mehsullar",
            "status" => "1",
        ]);
    }
}

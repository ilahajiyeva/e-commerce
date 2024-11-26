<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Slider::create([
            "title" => "Ən mükəmməl ayaqqabınızı tapın.",
            "image" => "https://fakeimg.pl/250x100/",
            "content" => "E-ticarət saytına xoş gəlmişsiniz!",
            "url"=> 'products',
            "status" => '1'
        ]);

    }
}

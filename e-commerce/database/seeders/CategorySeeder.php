<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {

        $kishi = Category::create([
            'name' => "Kişi",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Kişi Geyim",
            'cat_ust'=> null,
            'status' => "1",
        ]);
        Category::create([
            'name' => "Kişi Kostyum",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Kişi Kostyumları",
            'cat_ust'=> $kishi->id,
            'status' => "1",
        ]);
        Category::create([
            'name' => "Kişi Jeans",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Kişi Jeans",
            'cat_ust'=> $kishi->id,
            'status' => "1",
        ]);

        $qadin = Category::create([
            'name' => "Qadın",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Qadın Geyim",
            'cat_ust'=> null,
            'status' => "1",
        ]);
        Category::create([
            'name' => "Qadın Çanta",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Qadın Çantaları",
            'cat_ust'=> $qadin->id,
            'status' => "1",
        ]);
        Category::create([
            'name' => "Qadın Jeans",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Qadın Jeans",
            'cat_ust'=> $qadin->id,
            'status' => "1",
        ]);

        $ushaq = Category::create([
            'name' => "Uşaq",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Uşaq Geyim",
            'cat_ust'=> null,
            'status' => "1",
        ]);
        Category::create([
            'name' => "Uşaq Oyuncağı",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Uşaq Oyuncaqları",
            'cat_ust'=> $ushaq->id,
            'status' => "1",
        ]);
        Category::create([
            'name' => "Uşaq Jeans",
            'image' => null,
            'thumbnail'=> null,
            'content' => "Uşaq Jeans",
            'cat_ust'=> $ushaq->id,
            'status' => "1",
        ]);
    }
}

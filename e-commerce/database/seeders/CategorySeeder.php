<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       $qadin = Category::create([
            "name" => "Qadın",
            "image" => null,
            "thumbnail" => null,
            "content" => "Qadın Geyim",
            "category_id"=> null,
            "status" => '1'
        ]);
        Category::create([
            "name" => "Qadın Çanta",
            "image" => null,
            "thumbnail" => null,
            "content" => "Qadın Çantaları",
            "category_id"=> $qadin->id,
            "status" => '1'
        ]);
        Category::create([
            "name" => "Qadın Jeans",
            "image" => null,
            "thumbnail" => null,
            "content" => "Qadın Jeans",
            "category_id"=> $qadin->id,
            "status" => '1'
        ]);


        $kishi = Category::create([
            "name" => "Kişi",
            "image" => null,
            "thumbnail" => null,
            "content" => "Kişi Geyim",
            "category_id"=> null,
            "status" => '1'
        ]);
        Category::create([
            "name" => "Kişi Kostyum",
            "image" => null,
            "thumbnail" => null,
            "content" => "Kişi Kostyumları",
            "category_id"=> $kishi->id,
            "status" => '1'
        ]);
        Category::create([
            "name" => "Kişi Jeans",
            "image" => null,
            "thumbnail" => null,
            "content" => "Kişi Jeans",
            "category_id"=> $kishi->id,
            "status" => '1'
        ]);

        $ushaq = Category::create([
            "name" => "Uşaq",
            "image" => null,
            "thumbnail" => null,
            "content" => "Uşaq Geyim",
            "category_id"=> null,
            "status" => '1'
        ]);
        Category::create([
            "name" => "Uşaq Oyuncağı",
            "image" => null,
            "thumbnail" => null,
            "content" => "Uşaq Oyuncaqlari",
            "category_id"=> $ushaq->id,
            "status" => '1'
        ]);
        Category::create([
            "name" => "Uşaq Jeans",
            "image" => null,
            "thumbnail" => null,
            "content" => "Uşaq Jeans",
            "category_id"=> $ushaq->id,
            "status" => '1'
        ]);
    }

}

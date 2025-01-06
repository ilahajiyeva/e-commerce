<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Məhsul 1',
            'image' => 'images/cloth_1.jpg',
            'category_id' => 1,
            'description' => "Məhsulumuz çox keyfiyyətlidir.",
            'price' => 100,
            'size' => "Small",
            'color' => "Mavi",
            'quantity' => 10,
            'status' => '1',
            'short_text' => "Qısa məlumat.."

        ]);
        Product::create([
            'name' => 'Məhsul 2',
            'image' => 'images/shoe_1.jpg',
            'category_id' => 2,
            'description' => "Məhsulumuz çox keyfiyyətlidir 2",
            'price' => 35,
            'size' => "Medium",
            'color' => "Qara",
            'quantity' => 5,
            'status' => '1',
            'short_text' => "Qısa məlumat.."

        ]);
    }
}

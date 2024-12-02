<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => "Məhsul 1",
            'image' => "assets/images/shoe_1.jpg",
            'category_id' => 1,
            'short_text'=> 'Qısa məlumat',
            'price' => 100,
            'size' => 'Qara',
            'quantity' => 10,
            'status' => '1',
            'content' => '<p>Keyfiyyətli məhsul.</p>'
        ]);

        Product::create([
            'name' => "Məhsul 2",
            'image' => "assets/images/cloth_3.jpg",
            'category_id' => 1,
            'short_text'=> 'Qısa məlumat',
            'price' => 200,
            'size' => 'Mavi',
            'quantity' => 5,
            'status' => '1',
            'content' => '<p>Keyfiyyətli məhsul.</p>'
        ]);
    }
}

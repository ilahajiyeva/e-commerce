<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryId = [1,2,3,4,5,6,7,8,9];
        $sizelist = ['XS','S','M','L','XL','XXL'];
        $colorlist = ['Ağ','Qara','Sarı','Qırmızı','Mavi'];

        $size = $sizelist[random_int(0,5)];
        $color = $colorlist[random_int(0,4)];
        return [
            'name' => $color. " ". $size. " Məhsul",
            'category_id' => $categoryId[random_int(0,8)],
            'description' => "Açıqlama",
            'price' => random_int(10,500),
            'short_text' => $categoryId[random_int(0,8)].' id-li məhsul',
            'size' => $size,
            'color' => $color,
            'quantity' => 1,
            'status' => '1'
        ];
    }
}

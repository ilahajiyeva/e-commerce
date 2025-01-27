<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'thumbnail',
        'content',
        'cat_ust',
        'status',
    ];
    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    public function subcategory(){
        return $this->hasMany(Category::class,'cat_ust','id');
    }
    public function getTotalProductCount() {
        $total = $this->products()->count();

        foreach($this->subcategory as  $childcategory) {
            $total += $childcategory->products()->count();
        }
        return $total;
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}

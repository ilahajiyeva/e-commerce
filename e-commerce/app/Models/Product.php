<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;
    protected $fillable = [
        'name',
        'image',
        'tumbnail',
        'slug',
        'category_id',
        'short_text',
        'price',
        'size',
        'quantity',
        'status',
        'content',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}

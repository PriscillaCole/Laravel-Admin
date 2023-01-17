<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }
}

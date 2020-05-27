<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'price', 'color', 'size', 'quantity', 'image'];


    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

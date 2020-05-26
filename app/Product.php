<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [];


    public function categories(){
        return $this->belongsTo(Category::class , 'category_id' , 'id');
    }
}



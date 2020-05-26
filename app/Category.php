<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    //

    use Notifiable;

    protected $fillable = ['name' ,  'gender'];

    public function products(){
        return $this->hasMany(Product::class , 'category_id' , 'id');
    }
}

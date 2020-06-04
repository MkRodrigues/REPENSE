<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = ['name',  'type'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}

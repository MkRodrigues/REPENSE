<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model

{
    protected $table = "user_order";
    protected $fillable = [
        'reference', 'pagseguro_status' , 'pagseguro_code' ,'items'
    ];


        public function user()
        {
            return $this->belongsTo(User::class);
        }
}

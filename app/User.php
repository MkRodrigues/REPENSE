<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birth_date', 'cpf', 'email', 'address', 'address_number', 'address_complement',
        'zipcode', 'state', 'phone',  'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany(UserOrder::class);
    }

    public function routeNotificationForNexmo($notification)
    {
        $storeMobilePhoneNumber = trim(str_replace(['(', ')', ' ', '-'], '', $this->store->mobile_phone));
        return '55'.$storeMobilePhoneNumber;
    }

    public function isAdmin()
    {
        return $this->role == 'admin';
    }
}

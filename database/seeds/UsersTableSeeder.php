<?php

use App\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    public function run()
    {

        $user = User::where('email' , 'admin@admin.com.br')->first();

        if(!$user){
            User::create([
                'name' => 'Admin' ,
                'birth_date' => Carbon::create('2000' , '01' , '01' ) ,
                'cpf' => '123456789011',
                'email' => 'admin@admin.com.br' ,
                'address' => 'rua admin' ,
                'address_number' => '10' ,
                'address_complement' => 'casa admin' ,
                'zipcode' => '04960111' ,
                'state' => 'sao paulo' ,
                'phone' => '11952367734' ,
                'password' => Hash::make('1234567890') ,
                'role' => 'admin'
            ]);
        }else{
            if($user->role != 'admin'){
                $user->role = 'admin';
                $user->save();
            }
        }
    }
}

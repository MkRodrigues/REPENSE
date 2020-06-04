<?php

use App\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    public function run()
    {

        $user = User::where('email', 'admin@admin.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Mariana Medeiros Lima',
                'birth_date' => Carbon::create('2000', '01', '01'),
                'cpf' => '44488855588',
                'email' => 'admin@admin.com',
                'address' => 'Avenida Engenheiro Eusebio Stevaux',
                'address_number' => '823',
                'address_complement' => 'Predio',
                'zipcode' => '04696000',
                'state' => 'Sao Paulo',
                'phone' => '1156827300',
                'password' => Hash::make('admin1234'),
                'role' => 'admin'
            ]);
        } else {
            if ($user->role != 'admin') {
                $user->role = 'admin';
                $user->save();
            }
        }
    }
}

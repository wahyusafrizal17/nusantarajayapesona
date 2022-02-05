<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('Nusa2022jaya');

        $data = [
            ['name'=>'Nusantara Jaya Pesona','email'=>'marketing@nusantarajayapesona.com','password'=> $password],
        ];

        User::insert($data);
    }
}

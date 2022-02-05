<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Setting;
        $user->create(
            [
                'name'=>'Nusantara Jaya Pesona',
                'email'=>'nusantarajayapesona@gmail.com',
                'phone'=>'081312221701',
                'logo' => 'nusantara.png',
                'link_facebook' => 'https://www.facebook.com/wahyusafrizal74',
                'address' => 'Bandung', 
                'description' => 'sample', 
            ]
        );
    }
}

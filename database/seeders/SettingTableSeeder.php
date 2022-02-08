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
                'email'=>'marketing@nusantarajayapesona.com',
                'phone'=>'081312221701',
                'logo' => 'nusantara.png',
                'link_facebook' => 'https://www.facebook.com/wahyusafrizal74',
                'address' => 'Bandung', 
                'description' => 'NUSANTARA JAYA PESONA has became the biggest Supplier of Coconut Product for local and international markets. we present from best product quality from selected raw material. business is our goal but establishing good relationship with business partners is also our main goal. We believe yhat a good business is a good relationship. therefore, with this company profile, we are always ready to cooperate in the fields that we run.', 
            ]
        );
    }
}

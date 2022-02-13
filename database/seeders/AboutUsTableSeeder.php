<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new AboutUs;
        $about->create(
            [
                'description' => 'NUSANTARA JAYA PESONA has became the biggest Supplier of Coconut Product for local and international markets. we present from best product quality from selected raw material. business is our goal but establishing good relationship with business partners is also our main goal. We believe yhat a good business is a good relationship. therefore, with this company profile, we are always ready to cooperate in the fields that we run.', 
                'images'=>'about.png',
            ]
        );
    }
}

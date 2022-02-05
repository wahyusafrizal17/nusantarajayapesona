<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['images' => 'kelapa.jpg', 'status'  => 'active'],
            ['images' => 'pisang.jpg', 'status'  => 'sub active'],
            ['images' => 'coconut.jpg', 'status' => 'sub active'],
        ];
        Slider::insert($data);
    }
}

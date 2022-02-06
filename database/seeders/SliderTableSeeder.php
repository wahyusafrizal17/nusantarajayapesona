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
            ['images' => 'slide-1.jpg', 'status'  => 'active'],
            ['images' => 'slide-2.jpg', 'status'  => 'sub active'],
            ['images' => 'slide-3.jpg', 'status' => 'sub active'],
        ];
        Slider::insert($data);
    }
}

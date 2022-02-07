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
            ['images' => 'slide-1.jpeg', 'status'  => 'active'],
            ['images' => 'slide-2.jpeg', 'status'  => 'sub active'],
            ['images' => 'slide-3.jpeg', 'status'  => 'sub active'],
            ['images' => 'slide-4.jpeg', 'status'  => 'sub active'],
        ];
        Slider::insert($data);
    }
}

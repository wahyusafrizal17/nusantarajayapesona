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
            ['images' => 'slide-1.jpeg', 'status'  => 'active', 'is_active' => 1],
            ['images' => 'slide-2.jpeg', 'status'  => 'sub active', 'is_active' => 1],
            ['images' => 'slide-3.jpeg', 'status'  => 'sub active', 'is_active' => 1],
            ['images' => 'slide-4.jpeg', 'status'  => 'sub active', 'is_active' => 1],
        ];
        Slider::insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name_category' => 'Kelapa'          , 'slug' => 'kelapa'         , 'images' => 'kelapa.png', 'is_active' => 1],
            ['name_category' => 'Pisang'          , 'slug' => 'pohon-pisang'   , 'images' => 'pisang.png', 'is_active' => 1],
        ];
        Category::insert($data);
    }
}

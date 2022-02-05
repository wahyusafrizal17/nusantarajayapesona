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
            ['name_category' => 'Kelapa'          , 'slug' => 'kelapa'         , 'images' => 'kelapa.jpg'],
            ['name_category' => 'Pohon pisang'    , 'slug' => 'pohon-pisang'   , 'images' => 'pisang.jpg'],
        ];
        Category::insert($data);
    }
}

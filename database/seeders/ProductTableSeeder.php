<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name_product' => 'Semi Husked Coconut' , 'slug'  => 'semi-husked-coconut', 'category_id' => 1, 'description' => 'sample', 'images' => 'tropical-fruit-halved-rozbitogo-coconut-light-background-concept-organic-fruit.jpg'],
            ['name_product' => 'Coconut Copra Meal'  , 'slug'  => 'coconut-copra-meal' , 'category_id' => 1, 'description' => 'sample', 'images' => 'tropical-fruit-halved-rozbitogo-coconut-light-background-concept-organic-fruit.jpg'],
            ['name_product' => 'Dessicated Coconut'  , 'slug'  => 'dessicated-coconut' , 'category_id' => 1, 'description' => 'sample', 'images' => 'tropical-fruit-halved-rozbitogo-coconut-light-background-concept-organic-fruit.jpg'],
            ['name_product' => 'Coconut Fresh Water' , 'slug'  => 'coconut-fresh-water', 'category_id' => 1, 'description' => 'sample', 'images' => 'tropical-fruit-halved-rozbitogo-coconut-light-background-concept-organic-fruit.jpg'],
        ];
        Product::insert($data);
    }
}

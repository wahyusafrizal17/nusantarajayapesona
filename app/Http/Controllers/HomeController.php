<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Images;

class HomeController extends Controller
{

    public function index()
    {
        $data['sliderA'] = Slider::where('status', 'Active')->first();
        $data['sliderS'] = Slider::where('status', 'Sub active')->get();
        $data['categories'] = Category::all();
        return view('welcome', $data);
    }

    public function catalog($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $data['products'] = Product::where('category_id', $category->id)->get();
        return view('catalog.index', $data);
    }

    public function detail($slug)
    {
        $data['product'] = Product::where('slug', $slug)->first();
        $data['images'] = Images::where('product_id', $data['product']->id)->get();
        $data['catalogs'] = Category::all();
        $data['products'] = Product::paginate(3);
        return view('catalog.detail', $data);
    }

    public function dashboard()
    {
        return view('administration.dashboard');
    }
}

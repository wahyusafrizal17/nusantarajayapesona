<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Images;
use App\Models\User;

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
        $data['products']   = Product::all();
        $data['categories'] = Category::all();
        $data['users']      = User::all();
        $data['sliders']    = Slider::all();

        return view('administration.dashboard', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Images;
use App\Models\User;
use App\Models\AboutUs;

class HomeController extends Controller
{

    public function index()
    {
        $data['sliderA'] = Slider::where('status', 'Active')->where('is_active', 1)->first();
        $data['sliderS'] = Slider::where('status', 'Sub active')->where('is_active', 1)->get();
        $data['categories'] = Category::where('is_active', 1)->get();
        return view('welcome', $data);
    }

    public function catalog($slug)
    {
        $category = Category::where('slug', $slug)->where('is_active', 1)->first();
        if(empty($category)){
            return abort(404);
        }
        $data['products'] = Product::where('category_id', $category->id)->where('is_active', 1)->paginate(8);
        return view('catalog.index', $data);
    }

    public function detail($slug)
    {
        $data['product'] = Product::where('slug', $slug)->where('is_active', 1)->first();
        if(empty($data['product'])){
            return abort(404);
        }
        $data['images'] = Images::where('product_id', $data['product']->id)->get();
        $data['catalogs'] = Category::where('is_active', 1)->get();
        $data['products'] = Product::where('is_active', 1)->paginate(3);
        return view('catalog.detail', $data);
    }

    public function dashboard()
    {
        $data['products']   = Product::where('is_active', 1)->get();
        $data['categories'] = Category::where('is_active', 1)->get();
        $data['users']      = User::all();
        $data['sliders']    = Slider::where('is_active', 1)->get();

        return view('administration.dashboard', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Category;
use App\Models\Slider;

class HomeController extends Controller
{

    public function index()
    {
        $data['sliderA'] = Slider::where('status', 'Active')->first();
        $data['sliderS'] = Slider::where('status', 'Sub active')->get();
        return view('welcome', $data);
    }

    public function dashboard()
    {
        return view('administration.dashboard');
    }
}

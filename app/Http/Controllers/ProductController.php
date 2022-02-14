<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Images;
use illuminate\Support\Str;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::orderBy('is_active', 'desc')->get();
        return view('administration.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::pluck('name_category', 'id');
        return view('administration.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('images')){
            $file = $request->file('images');
            $fileName = Str::slug($request->name_product).'.'.$file->extension();   
            $destinationPath = 'assets/img/product';
            $file->move($destinationPath,$fileName);

            $input['images'] = $fileName;
        }
        $product = Product::create($input);
        
        if($files=$request->file('image')){
            $no = 1;
            foreach($files as $file){
                $name = 'image-'.$no.'-'.date('y-m-d-h-i-s').'.'.$file->extension();
                $file->move('assets/img/images',$name);

                $image = new Images;
                $image->product_id = $product->id;
                $image->images = $name;
                $image->save();

                $no++;
            }
        }

        // alert()->success('Data berhasil ditambahkan' , 'Success');
        return redirect('administration/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['category'] = Category::pluck('name_category', 'id');
        $data['product'] = Product::findOrFail($id);
        $data['images'] = Images::where('product_id', $id)->get();
        return view('administration.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $input = $request->all();
        if($request->hasFile('images')){
            $request->validate([
                'images' => 'mimes:jpeg,jpg,png'
            ],
            [
                'images.mimes' => 'Format gambar harus jpeg, jpg atau png',
            ]);

            $file = $request->file('images');
            $fileName = Str::slug($request->name_product).'.'.$file->extension();    
            $destinationPath = 'assets/img/product';
            if(is_file($destinationPath.'/'.$product->images)){
            unlink($destinationPath.'/'.$product->images);
            }
            $file->move($destinationPath,$fileName);

            $input['images'] = $fileName;
        }
        $product->update($input);

        if($files=$request->file('image')){
            $no = 1;
            foreach($files as $file){
                $name = 'image-'.$no.'-'.date('y-m-d-h-i-s').'.'.$file->extension();
                $file->move('assets/img/images',$name);

                $image = new Images;
                $image->product_id = $product->id;
                $image->images = $name;
                $image->save();

                $no++;
            }
        }

        // alert()->success('Data berhasil diubah' , 'Success');
        return redirect('administration/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $destinationPath = 'assets/img/product/';
        if(is_file($destinationPath.'/'.$data->images)){
        unlink($destinationPath.$data->images);
        }
        $data->delete();

        return redirect('administration/product');
    }

    public function images($id)
    {
        $data = Images::findOrFail($id);
        $destinationPath = 'assets/img/images/';
        unlink($destinationPath.$data->images);
        $data->delete();

        return redirect()->back();
    }

    public function active($id)
    {
        $data = Product::findOrFail($id);
        if($data->is_active == 1){
            $data->is_active = 0;
        }else{
            $data->is_active = 1;
        }
        $data->save();

        return redirect('administration/product');
    }
}

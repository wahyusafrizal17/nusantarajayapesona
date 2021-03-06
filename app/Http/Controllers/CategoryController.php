<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use illuminate\Support\Str;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::orderBy('is_active', 'desc')->get();
        return view('administration.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.category.create');
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
            $fileName = $request->name_category.'.'.$file->extension();
            $destinationPath = 'assets/img/category';
            $file->move($destinationPath,$fileName);

            $input['images'] = $fileName;
        }

        Category::create($input);

        // alert()->success('Data berhasil ditambahkan' , 'Success');
        return redirect('administration/category');
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
        $data['category'] = Category::findOrFail($id);
        return view('administration.category.edit',$data);
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
        $category = Category::findOrFail($id);
        $input = $request->all();

        if($request->hasFile('images')){
            $request->validate([
                'images' => 'mimes:jpeg,jpg,png'
            ],
            [
                'images.mimes' => 'Format gambar harus jpeg, jpg atau png',
            ]);
            
            $file = $request->file('images');
            $fileName = $request->name_category.'.'.$file->extension();   
            $destinationPath = 'assets/img/category';
            if(is_file($destinationPath.'/'.$category->images)){
            unlink($destinationPath.'/'.$category->images);
            }
            $file->move($destinationPath,$fileName);

            $input['images'] = $fileName;
        }
        $category->update($input);

        // alert()->success('Data berhasil diubah' , 'Success');
        return redirect('administration/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $destinationPath = 'assets/img/category/';
        if(is_file($destinationPath.'/'.$data->images)){
        unlink($destinationPath.$data->images);
        }
        $data->delete();

        return redirect('administration/category');
    }

    public function active($id)
    {
        $data = Category::findOrFail($id);
        if($data->is_active == 1){
            $data->is_active = 0;
        }else{
            $data->is_active = 1;
        }
        $data->save();

        return redirect('administration/category');
    }
}

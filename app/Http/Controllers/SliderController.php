<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Requests\Slider\StoreRequest;

class SliderController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::all();
        return view('administration.slider.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $slider = Slider::where('status', 'Active')->first();
        if(!empty($slider)){
            $data = Slider::where('id', $slider->id)->first();
            $data->status = 'Sub active';
            $data->save();
        }
        
        $input = $request->all();
        if($request->hasFile('images')){
            $file = $request->file('images');
            $fileName = $file->getClientOriginalName();    
            $destinationPath = 'assets/img/slider';
            $file->move($destinationPath,$file->getClientOriginalName());

            $input['images'] = $fileName;
        }

        Slider::create($input);

        // alert()->success('Data berhasil ditambahkan' , 'Success');
        return redirect('administration/slider');
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
        $data['slider'] = Slider::findOrFail($id);
        return view('administration.slider.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::where('status', 'Active')->first();
        if(!empty($slider)){
            $data = Slider::where('id', $slider->id)->first();
            $data->status = 'Sub active';
            $data->save();
        }

        $slider = Slider::findOrFail($id);
        $input = $request->all();
        if($request->hasFile('images')){
            $file = $request->file('images');
            $fileName = $file->getClientOriginalName();    
            $destinationPath = 'assets/img/slider';
            $file->move($destinationPath,$file->getClientOriginalName());

            $input['images'] = $fileName;
        }
        $slider->update($input);

        // alert()->success('Data berhasil diubah' , 'Success');
        return redirect('administration/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::findOrFail($id);
        $data->delete();

        return redirect('administration/slider');
    }
}

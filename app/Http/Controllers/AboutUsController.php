<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $data['about'] = AboutUs::find(1);
        return view('administration.about.index', $data);
    }

    public function update(Request $request,$id)
    {
        $about = AboutUs::find($id);

        $input = $request->all();

        if($request->hasFile('images')){
            $file = $request->file('images');
            $fileName = 'about-'.date('y-m-d-h-i-s').'.'.$file->extension();    
            $destinationPath = 'assets/img/about';
            if(is_file($destinationPath.'/'.$about->images)){
                unlink($destinationPath.'/'.$about->images);
            }
            $file->move($destinationPath,$fileName);

            $input['images']         = $fileName;
        }
        
        $about->update($input);

        // alert()->success('Data berhasil diubah' , 'Success');
        return redirect('administration/about');
    }
}

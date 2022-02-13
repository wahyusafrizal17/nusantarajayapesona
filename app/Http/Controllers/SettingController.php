<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $data['setting'] = Setting::find(1);
        return view('administration.setting.index', $data);
    }

    public function update(Request $request,$id)
    {
        $setting = Setting::find($id);

        $input = $request->all();

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'logo-'.date('y-m-d-h-i-s').'.'.$file->extension();    
            $destinationPath = 'assets/img/logo';
            if(is_file($destinationPath.'/'.$setting->logo)){
                unlink($destinationPath.'/'.$setting->logo);
            }
            $file->move($destinationPath,$fileName);

            $input['logo']         = $fileName;
        }
        
        $setting->update($input);

        // alert()->success('Data berhasil diubah' , 'Success');
        return redirect('administration/setting');
    }
}

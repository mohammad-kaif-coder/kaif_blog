<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;

class SettingController extends Controller {

    public function index() {
        $setting = Setting::where(['id'=>1])->first();
        //dd($setting);exit();
        return view('admin.setting.index',compact('setting'));
    }

    public function store(Request $request) {

      
        $existIimage1 = $request->input('existing_site_f');
        if ($request->hasFile('site_favicon')) {            
            $image = $request->file('site_favicon');
            $destinationPath = '/public/uploads/setting';
            $extension1 = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $extension1);
            //$input['image'] = "$extension";
            //dd( $extension1);exit();
        }else{
            $extension1=$existIimage1;
        }
        
         $existIimage2 = $request->input('existing_site_l');
        if ($request->hasFile('site_logo')) {
            $image = $request->file('site_logo');
            $destinationPath = '/public/uploads/setting';
            $extension2 = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $extension2);
            //$input['image'] = "$extension";
        }else{
            $extension2=$existIimage2;
        }        
         $existIimage3 = $request->input('existing_admin_f');
         if ($request->hasFile('admin_favicon')) {
            $image = $request->file('admin_favicon');
            $destinationPath = '/public/uploads/setting';
            $extension3 = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $extension3);
            //$input['image'] = "$extension";
        }else{
            $extension3=$existIimage3;
        }
         $existIimage4 = $request->input('existing_admin_l');
        if ($request->hasFile('admin_logo')) {
            $image = $request->file('admin_logo');
            $destinationPath = '/public/uploads/setting';
            $extension4 = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $extension4);
            //$input['image'] = "$extension";
        }else{
            $extension4=$existIimage4;
        }

        $data = [
            'site_title' => $request->site_title,
            'site_description' => $request->site_description,
            'site_favicon' => $extension1 ?? '',
            'site_logo' => $extension2 ?? '',
            
            'admin_title' => $request->admin_title,
            'admin_description' => $request->admin_description,
            'admin_favicon' => $extension3 ?? '',
            'admin_logo' => $extension4 ?? '',
        ];

        Setting::updateOrcreate(['id' => 1], $data);
        return redirect()->back()->with('success', ' setting page content updated successfully');
    }

}

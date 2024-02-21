<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SeoContent\HomeSeo;
use App\Models\Admin\Homepage;

class HomepageController extends Controller {

    public function index() {
        $home_page = Homepage :: where(['id' => 1])->first();
        $meta = HomeSeo :: where(['pagetype' => 'homepage'])->first();
        return view('admin.homepage.index', compact('home_page', 'meta'));
    }

    public function store(Request $request) {

        $existImage_profile = $request->input('existing_profile');
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $destinationPath = '/public/uploads/homepage';
            $extension1 = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $extension1);
        } else {
            $extension1 = $existImage_profile;
        }
        $existImage_logo = $request->input('existing_logo');
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $destinationPath = '/public/uploads/homepage';
            $extension2 = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $extension2);
        } else {
            $extension2 = $existImage_logo;
        }


        $existImage_back_image = $request->input('existing_back_image');
        if ($request->hasFile('back_image')) {
            $image = $request->file('back_image');
            $destinationPath = '/public/uploads/homepage';
            $extension3 = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $extension3);
        } else {
            $extension3 = $existImage_back_image;
        }

        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
            'profile' => $extension1 ?? '',
            'logo' => $extension2 ?? '',
            'back_image' => $extension3 ?? '',
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'pinterest' => $request->pinterest,
            'title' => $request->title,
            'description' => $request->description,
            'cv' => $request->cv,
        ];
        Homepage::updateOrcreate(['id' => 1], $data);
        $meta = [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'page_title' => $request->page_title,
            'pagetype' => 'homepage'
        ];
        HomeSeo::updateOrcreate(['pagetype' => 'homepage'], $meta);

        return redirect()->back()->with('success', ' setting page content updated successfully');
    }

}

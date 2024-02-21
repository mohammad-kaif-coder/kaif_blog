<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Profile;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function index() {
        $profile = Profile::where(['id' => 1])->first();

        return view('admin.profile.index', compact('profile'));
    }

    public function store(Request $request) {

        
        // Retrieve the existing image value
        $existingImage = $request->input('existing_image');

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $filName = $logo->getClientOriginalName();
            $dir = 'image';
            $logoPath = $logo->storeAs($dir, $filName, 'public');
        } else {
            // No new file uploaded, keep the existing image value
            $logoPath = $existingImage;
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'image' => $logoPath ?? '',
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'phone' => $request->phone,
            'birth' => $request->birth,
            'location' => $request->location,
            'designation' => $request->designation
        ];

        Profile::updateOrcreate(['id' => 1], $data);
        return redirect()->back()->with('success', ' Profile page content updated successfully');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SeoContent\AboutSeo;
use App\Models\Admin\Skill;
use App\Models\Admin\Aboutpage;
use App\Models\Admin\Specialize;
use Illuminate\Support\Facades\Storage;

class AboutPageController extends Controller {

    public function index() {

        $meta = AboutSeo :: where(['pagetype' => 'aboutpage'])->first();

        $data = Aboutpage :: where(['id' => 1])->first();

        $skill = Skill :: where(['sub_type' => 'skill'])->get();
        
        $specialize = Specialize :: where(['sub_type' => 'specialize'])->get();

        return view('admin.aboutpage.index', compact('meta', 'data', 'skill','specialize'));
    }

    public function store(Request $request) {       
        /**
         * --------------------------------
         *  SPECIALIZE CONTENT *CREATE
         * ------------------------------- 
         */
        $specialize_images_insertion = [];
        if ($request->has('specialize') && sizeof($request->input('specialize'))) {
            foreach ($request->input('specialize') as $loop_key => $specialize_image) {
                if (isset($specialize_image['s_title']) && !empty($specialize_image['s_title']) && isset($specialize_image['s_stash']) && !empty($specialize_image['s_stash'])) {
                            $specialize_images_insertion[] = [                              
                                's_title' => $specialize_image['s_title'],
                                's_stash' => $specialize_image['s_stash'],                              
                                'pagetype' => 'about',
                                'sub_type' => 'specialize',
                            ];
                }
            }
            if (sizeof($specialize_images_insertion)) {
                Specialize::insert($specialize_images_insertion);
            }
        }
         /**
         * --------------------------------
         *  SPECIALIZE CONTENT *UPDATE
         * ------------------------------- 
         */      
        if ($request->has('existing_specializes') && sizeof($request->input('existing_specializes'))) {
            foreach ($request->input('existing_specializes') as $loop_key => $existing_specializes) {
                if (isset($existing_specializes['s_title']) && !empty($existing_specializes['s_title'])&&  isset($existing_specializes['s_stash']) && !empty($existing_specializes['s_stash'])) {                
                    $update_existing = [                    
                        's_title' => $existing_specializes['s_title'],
                        's_stash' => $existing_specializes['s_stash']
                    ];
                    Specialize::where(['id' => $loop_key])->update($update_existing);
                }
            }
        }
        /**
         * --------------------------------
         * SPECIALIZE CONTENT *DELETE
         * ------------------------------- 
         */      
        if ($request->has('deleted_specializes')) {
            $deleted_banner_images = explode(',', $request->input('deleted_specializes'));
            $existing_images = Specialize::select('image')->whereIn('id', $deleted_banner_images)->get();

//            foreach ($existing_images as $existing_image) {
//                if (!empty($existing_image->image)) {
//                    Storage::delete($destination_path . '/' . $existing_image->image);
//                }
//            }
            $r = Specialize::whereIn('id', $deleted_banner_images)->delete();
        }
        
        
        
        
        
       //==============================================
       //Skill
       ///==========================================
        
        /**
         * --------------------------------
         * SKILL MULTIPLE CONTENT *CREATE
         * ------------------------------- 
         */
        $destination_path = '/public/uploads/about/skill';
        $skill_images_insertion = [];
        if ($request->has('skill') && sizeof($request->input('skill'))) {
            foreach ($request->input('skill') as $loop_key => $skill_image) {
                if (isset($skill_image['alt']) && !empty($skill_image['alt']) && isset($skill_image['title']) && !empty($skill_image['title']) && isset($skill_image['stash']) && !empty($skill_image['stash'])) {
                    $skill_images = $request->file('skill');
                    //dd($skill_images);exit();
                    if (isset($skill_images[$loop_key]['image'])) {
                        $skill_image_name = date('U') . '_' . rand(0, 100) . '_skill_image.' . $skill_images[$loop_key]['image']->getClientOriginalExtension();
                        if ($skill_image) {
                            $skill_images[$loop_key]['image']->storeAs($destination_path, $skill_image_name);
                            $skill_images_insertion[] = [
                                'alt' => $skill_image['alt'],
                                'title' => $skill_image['title'],
                                'stash' => $skill_image['stash'],
                                'image' => $skill_image_name,
                                'pagetype' => 'about',
                                'sub_type' => 'skill',
                            ];
                        }
                    }
                }
            }
            if (sizeof($skill_images_insertion)) {
                Skill::insert($skill_images_insertion);
            }
        }
        /**
         * --------------------------------
         * SKILL MULTIPLE CONTENT *UPDATE
         * ------------------------------- 
         */
        if ($request->has('existing_skill_images') && sizeof($request->input('existing_skill_images'))) {
            foreach ($request->input('existing_skill_images') as $loop_key => $existing_home_image) {
                if (isset($existing_home_image['alt']) && !empty($existing_home_image['alt']) && isset($existing_home_image['title']) && !empty($existing_home_image['title'])&&  isset($existing_home_image['stash']) && !empty($existing_home_image['stash'])) {
                    $existing_home_images = $request->file('existing_skill_images');
                    $update_existing = [
                        'alt' => $existing_home_image['alt'],
                        'title' => $existing_home_image['title'],
                        'stash' => $existing_home_image['stash']
                    ];
                    if (isset($existing_home_images[$loop_key]['image'])) {
                        $existing_home_image_name = date('U') . '_' . rand(0, 100) . '_skill_image.' . $existing_home_images[$loop_key]['image']->getClientOriginalExtension();

                        if ($existing_home_image) {
                            $existing_home_images[$loop_key]['image']->storeAs($destination_path, $existing_home_image_name);

                            $existing_row = Skill::where(['id' => $loop_key])->first();
                            if (!empty($existing_row->image)) {
                                Storage::delete($destination_path . '/' . $existing_row->image);
                            }
                            $update_existing['image'] = $existing_home_image_name;
                        }
                    }

                    Skill::where(['id' => $loop_key])->update($update_existing);
                }
            }
        }

        /**
         * --------------------------------
         * SKILL MULTIPLE CONTENT *DELETE
         * ------------------------------- 
         */      
       
        
       $destination_path = '/public/uploads/about/skill';
        if ($request->has('deleted_skill_images')) {
            $deleted_banner_images = explode(',', $request->input('deleted_skill_images'));
            $existing_images = Skill::select('image')->whereIn('id', $deleted_banner_images)->get();

            foreach ($existing_images as $existing_image) {
                if (!empty($existing_image->image)) {
                    Storage::delete($destination_path . '/' . $existing_image->image);
                }
            }
            $r = Skill::whereIn('id', $deleted_banner_images)->delete();
        }
        
 
        
        /*
         * -----------------------------------
         * ABOUT PAGE UPDATE AND CREATE
         * -----------------------------------
         */

        $data = [
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'sub_title' => $request->sub_title,
        ];
        Aboutpage::updateOrcreate(['id' => 1], $data);

        /*
         * ------------------- 
         *          META UPDATE AND CREATE 
         * -------------------
         */
        $meta = [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'page_title' => $request->page_title,
            'pagetype' => 'aboutpage'
        ];
        AboutSeo::updateOrcreate(['pagetype' => 'aboutpage'], $meta);

        return redirect()->back()->with('success', ' setting page content updated successfully');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Services;
use Illuminate\Http\Request;

class ServicesPageController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $services_datas = Services::get();
        return view('admin.servicespage.index', compact('services_datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {

        return view('admin.servicespage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('U') . '_' . rand(0, 100) . '_services_image.' . $file->getClientOriginalExtension();
            $destinationPath = '/public/uploads/services';
            $file->storeAs($destinationPath, $fileName); // The file will be stored in the 'storage/app/uploads' directory
            //return "File uploaded successfully.";
            $input['image'] = $fileName;
        }

        Services::create($input);

        return redirect()->route('servicespage.index')
                        ->with('success', 'Perk created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id) {
        
        //pending deletion & update;**
        /*
         * $dd = $request->input('existing_id');
          if(isset($dd)){

          dd( $dd );
          exit();

          }

         */



        $services = Services::find($id);

        // Services::destroy($id);

        return view('admin.servicespage.show', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {


        $services = Services :: find($id);
        $services->delete();
        return redirect()->route('servicespage.index');
    }

//     public function deleteFromShow(Request $request, $id)
//    {
//        if ($request->has('confirm')) {
//            $this->destroy($id);
//        } else {
//             $this->destroy($id);
//            return view('admin.servicespage.index', compact('id'));
//        }
//    }
}

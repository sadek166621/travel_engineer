<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Country;

class CountryController extends Controller
{
    public function index()
    {
        $data['items'] = Country::orderBy('id','desc')->get();
        return view('admin.destination.country.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destination.country.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//         return $request;
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }
        $directory = 'countries';
        $name = 'image';
        $image_path = saveImageUrl($request, $name, $directory);
        $country = Country::create([
            'name' => $request->name,
            'image' => $image_path,
            'status' => $request->status,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.country.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['item'] = Country::findOrFail($id);
        return view('admin.destination.country.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $place = Country::findOrFail($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }
        $directory = 'countries';
        $name = 'image';
        if ($request->file('image')) {
            if ($place->image) {
                if (file_exists($place->image)) {
                    unlink($place->image);
                }
                $image_path = saveImageUrl($request, $name, $directory);
            } else {
                $image_path = saveImageUrl($request,$name,  $directory);
            }
        }
        else{
            $image_path = $place->image;
        }

        $place->update([
            'name' => $request->name,
            'image' => $image_path,
            'status' => $request->status,
        ]);


        return redirect()->route('admin.country.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $place = Country::findOrFail($id);
        if ($place->image){
            unlink($place->image);
        }
        $place->delete();
        return back();

    }

}

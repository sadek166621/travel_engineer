<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Country;
use Illuminate\Http\Request;
use App\Models\Admin\Place;
class PlaceController extends Controller
{
    public function index()
    {
        $data['items'] = Place::orderBy('id','desc')->get();
        return view('admin.destination.place.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['countries'] = Country::all();
        return view('admin.destination.place.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'country_id' =>'required',
            'name' => 'required',
            'image' => 'required'
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }
        $directory = 'places';
        $name = 'image';
        $image_path = saveImageUrl($request, $name, $directory);
        $place = Place::create([
            'country_id' => $request->country_id,
            'name' => $request->name,
            'image' => $image_path,
            'status' => $request->status,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.place.list');
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
        $data['countries'] = Country::all();
        $data['item'] = Place::findOrFail($id);
        return view('admin.destination.place.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'country_id' => 'required'
        ]);
        $place = Place::findOrFail($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }
        $directory = 'places';
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
            'country_id' =>$request->country_id,
            'image' => $image_path,
            'status' => $request->status,
        ]);


        return redirect()->route('admin.place.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $place = Place::findOrFail($id);
        if($place->image){
            unlink($place->image);
        }
        $place->delete();
        return back();

    }
}

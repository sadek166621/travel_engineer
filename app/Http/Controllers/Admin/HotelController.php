<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Country;
use App\Models\Admin\Hotel;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['hotels'] = Hotel::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.hotel.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['countries'] = Country::where('status', 1)->orderBy('name', 'asc')->get();
        return view('admin.hotel.form',$data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'country_id' =>'required',
            'name' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }

        $place = Hotel::create([
            'country_id' => $request->country_id,
            'name' => $request->name,
            'status' => $request->status,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.hotel.list');
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
        $data['item'] = Hotel::findOrFail($id);
        return view('admin.hotel.form',$data);
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
        $place = Hotel::findOrFail($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }

        $place->update([
            'name' => $request->name,
            'country_id' =>$request->country_id,
            'status' => $request->status,
        ]);


        return redirect()->route('admin.hotel.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $hotel = Hotel::find($id);
       $hotel->delete();
       return back()->with('success','Deleted Successfully');
    }
}

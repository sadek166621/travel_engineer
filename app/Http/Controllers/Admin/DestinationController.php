<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Destination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::orderBy('id','desc')->get();
        return view('admin.flight-destination.list',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.flight-destination.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'name' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }
        $service = Destination::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.destination.list');
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
        $destination = Destination::find($id);
        return view('admin.flight-destination.form',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destination = Destination::find($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }

        $destination->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);


        return redirect()->route('admin.destination.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destination = Destination::find($id);
        $destination->delete();
        return back();

    }
}

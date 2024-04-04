<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Origin;

class OriginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $origins = Origin::orderBy('id','desc')->get();
        return view('admin.origin.list',compact('origins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.origin.form');
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
        $service = Origin::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.origin.list');
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
        $origin = Origin::find($id);
        return view('admin.origin.form',compact('origin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $origin = Origin::find($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }

        $origin->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);


        return redirect()->route('admin.origin.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $origin = Origin::find($id);
        $origin->delete();
        return back();

    }
}

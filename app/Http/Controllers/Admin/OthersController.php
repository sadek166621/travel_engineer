<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Others;

class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['others'] = Others::orderBy('id','desc')->get();
        return view('admin.others.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('ok');
        return view('admin.others.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }


        $others = Others::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.others.list')->with('success','Page Added Successfully');
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
        $others = Others::find($id);
        return view('admin.others.form',compact('others'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $others = Others::findOrFail($id);
        if($others){
            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }


            $others->update([
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
            ]);

        }
        return redirect()->route('admin.others.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $others = Others::find($id);
        $others->delete();
        return back()->with('success', 'Page Deleted Successfully');
    }
}

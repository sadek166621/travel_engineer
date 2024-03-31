<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $data['items'] = Testimonial::orderBy('id','desc')->get();
        return view('admin.testimonial.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//         return $request;
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'country' => 'required',
            'state' => 'required',
            'image' => 'nullable'
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }
        $directory = 'testimonials';
        $name = 'image';
        if($request->file('image')){
            $image_path = saveImageUrl($request, $name, $directory);
        }
        else{
            $image_path = '';
        }

        $country = Testimonial::create([
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country,
            'state' => $request->state,
            'image' => $image_path,
            'status' => $request->status,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.testimonial.list');
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
        $data['item'] = Testimonial::findOrFail($id);
        return view('admin.testimonial.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $testimonial = Testimonial::findOrFail($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }
        $directory = 'countries';
        $name = 'image';
        if ($request->file('image')) {
            if ($testimonial->image) {
                if (file_exists($testimonial->image)) {
                    unlink($testimonial->image);
                }
                $image_path = saveImageUrl($request, $name, $directory);
            } else {
                $image_path = saveImageUrl($request,$name,  $directory);
            }
        }
        else{
            $image_path = $testimonial->image;
        }

        $testimonial->update([
            'name' => $request->name,
            'image' => $image_path,
            'status' => $request->status,
        ]);


        return redirect()->route('admin.testimonial.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($testimonial->image){
            unlink($testimonial->image);
        }
        $testimonial->delete();
        return back();

    }
}

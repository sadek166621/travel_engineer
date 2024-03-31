<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\admin\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $blogs =  Blog::orderBy('id','desc')->get();
        return view('admin.blog.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $image = $request->file('image');
        if($image){
            $currentDate = Carbon::now()->toDateString();
            //dd($image->getClientOriginalExtension());

            $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('assets/images/uploads/blog')) {
                mkdir('assets/images/uploads/blog', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/blog'), $imageName);
            //    $image->move(base_path().'assets/images/uploads/blog', $imageName);

            $image = $imageName;
        }

        $blog = blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.blog.list')->with('success','blog Added Successfully');
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
       $blog = blog::find($id);
        return view('admin.blog.form',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        if($blog){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $imageName = $blog->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/blog')) {
                    mkdir('assets/images/uploads/blog', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/blog'), $imageName);
                // $image->move(base_path().'assets/images/uploads/blog', $imageName);

                //$image = $imageName;
            }

            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imageName,
                'status' => $request->status,
            ]);

        }
        return redirect()->route('admin.blog.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

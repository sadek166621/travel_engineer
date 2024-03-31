<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryies = Category::orderBy('id','desc')->get();
        return view('admin.category.list',compact('categoryies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryies = Category::orderBy('id','desc')->get();
        return view('admin.category.form',compact('categoryies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
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
        $directory = 'categories';
        $name = 'image';
        $image_path = saveImageUrl($request, $name, $directory);
        $service = Category::create([
            'name' => $request->name,
            'cat_id' => $request->cat_id,
            'image' => $image_path,
            'status' => $request->status,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.category.list');
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
        $category = Category::find($id);
        $categoryies = Category::orderBy('id','desc')->get();
        return view('admin.category.edit',compact('category','categoryies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $category = Category::find($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else
        {
            $request->status = 1;
        }
        $directory = 'categories';
        $name = 'image';
        if ($request->file('image')) {
            if ($category->image) {
                if (file_exists($category->image)) {
                    unlink($category->image);
                }
                $image_path = saveImageUrl($request, $name, $directory);
            } else {
                $image_path = saveImageUrl($request,$name,  $directory);
            }
        }
        else{
            $image_path = $category->image;
        }

        $category->update([
            'name' => $request->name,
            'cat_id' => $request->cat_id,
            'image' => $image_path,
            'status' => $request->status,
        ]);


        return redirect()->route('admin.category.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();

    }
}

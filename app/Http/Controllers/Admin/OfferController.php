<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\offer;
use Carbon\Carbon;


class offerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $offers  = offer::orderBy('id','desc')->get();
        return view('admin.offer.list',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offer.form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'term' => 'required',
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

            if (!file_exists('assets/images/uploads/$offer')) {
                mkdir('assets/images/uploads/$offer', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/$offer'), $imageName);
            //    $image->move(base_path('assets/images/uploads/offer)', $imageName);

            $image = $imageName;
        }

        $offer = offer::create([
            'title' => $request->title,
            'description' => $request->description,
            'term' => $request->term,
            'image' => $image,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.offer.list')->with('success','offer Added Successfully');
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
        $offer = offer::find($id);
        return view('admin.offer.form',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offer = Offer::findOrFail($id);

        if($offer){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $imageName = $offer->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/offer')) {
                    mkdir('assets/images/uploads/offer', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/offer'), $imageName);
                // $image->move(base_path().'assets/images/uploads/offer', $imageName);

                //$image = $imageName;
            }

            $offer->update([
                'title' => $request->title,
                'description' => $request->description,
                'term' => $request->term,
                'image' => $imageName,
                'status' => $request->status,
            ]);

        }
        return redirect()->route('admin.offer.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $offer = Offer::find($id);
      $offer->delete();
      return back()->with('success', 'Delete Successfully');
    }
}

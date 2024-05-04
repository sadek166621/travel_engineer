<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Tickets;
use App\Models\HotelBooking;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['leads']= Tickets::orderBy('id','desc')->get();
        return view('admin.tickets.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $leads = Tickets::find($id);
        $leads->delete();
        return back();
    }

    public function hotelbooking(){
        $data['leads']= HotelBooking::orderBy('id','desc')->get();
        return view('admin.hotel-booking.list',$data);
    }

    public function hotelbookingdestroy($id){
        $data = HotelBooking::find($id);
        $data->delete();
        return back()->with('success','Deleted Successfully');

    }
}

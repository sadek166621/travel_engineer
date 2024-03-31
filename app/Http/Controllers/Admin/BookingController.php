<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Tour;
use App\Models\Admin\Package_departure;
use App\Models\Admin\Booking;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['bookings'] = Booking::orderBy('id','desc')->get();
        return view('admin.booking.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['tours'] = Tour::orderBy('id','desc')->get();
      return view('admin.booking.form',$data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'expected_travel_date' => 'required',
            'package_name' => 'required',
            'departure_point' => 'required',
            'no_of_person' => 'required',
        ]);

        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'expected_travel_date' => $request->expected_travel_date,
            'package_name' => $request->package_name,
            'departure_point' => $request->departure_point,
            'no_of_person' => $request->no_of_person,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.booking.list');
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
        $data['tours'] = Tour::orderBy('id','desc')->get();
        $data['booking'] = Booking::find($id);
        $data['package_departures'] = Package_departure::get();
        return view('admin.booking.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'expected_travel_date' => 'required',
            'package_name' => 'required',
            'departure_point' => 'required',
            'no_of_person' => 'required',
        ]);

        $booking = Booking::find($id);
        $booking->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'expected_travel_date' => $request->expected_travel_date,
            'package_name' => $request->package_name,
            'departure_point' => $request->departure_point,
            'no_of_person' => $request->no_of_person,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.booking.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('admin.booking.list');

    }

    public function getDepartures($tourId) {
        $departures = Package_departure::where('tour_id', $tourId)->pluck('departure_id');
        return response()->json($departures);
    }
}

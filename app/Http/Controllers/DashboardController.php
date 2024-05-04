<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        $data['tickets'] = DB::table('tickets')->count();
        $data['bookings'] = DB::table('hotel_bookings')->count();
        $data['tours'] = DB::table('tours')->count();
        $data['messages'] = DB::table('messages')->count();
        return view('admin.dashboard.dashboard',$data);
    }
}

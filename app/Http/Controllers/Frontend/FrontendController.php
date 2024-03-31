<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Country;
use App\Models\Admin\Place;
use App\Models\Admin\Testimonial;
use Illuminate\Http\Request;
use App\Models\Admin\Slider;
use App\Models\Admin\Tour;
use App\Models\Admin\Package_departure;
use App\Models\Admin\DayActivity;
use App\Models\Admin\Day;
use App\Models\Admin\Booking;
use App\Models\Admin\Blog;
use App\Models\Message;
use App\Models\Newsletter;


class FrontendController extends Controller
{
    public function index(){
        $data['sliders'] = Slider::where('status', 1)->orderBy('id','desc')->get();
        $data['packages'] = Tour::where('status', 1)->orderBy('id','desc')->get();
        $data['countries'] = Country::where('status', 1)->orderBy('name', 'asc')->get();
        $data['places'] = Place::where('status', 1)->orderBy('name', 'asc')->get()->take(6);
        $data['categories'] = Category::where('status', 1)->orderBy('name', 'asc')->get()->take(8);
        $data['testimonials'] = Testimonial::where('status', 1)->orderBy('created_at', 'desc')->get();
        $data['blogs'] = Blog::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.home.index',$data);
    }

    public function getPlaceByCountry($id)
    {
        if($id == 0){
            $places = Place::where('status', 1)->get();
        }
        else{
            $places=Place::where('country_id', $id)->where('status', 1)->get()->take(6);
        }
        return response()->json($places);
    }

    public function search(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $country = Country::where('name', $request->name)->where('status', 1)->first();
        if ($country){
            $data['items'] = Tour::where('country', $country->id)->where('status', 1)->get();
        }
        else{
            $place = Place::where('name', $request->name)->where('status', 1)->first();
            if($place){
                $data['items'] = Tour::where('place', $place->id)->where('status', 1)->get();
            }
            else{
                $data['items'] = null;
            }

        }
        return view('frontend.package.searched_package', $data);
    }
    public function getPackageByPlace($id)
    {
        $data['items'] = Tour::where('place', $id)->where('status', 1)->get();
        return view('frontend.package.index', $data);
    }
    public function getPackageByCategory($id)
    {
        $data['items'] = Tour::where('category', $id)->where('status', 1)->get();
        return view('frontend.package.index', $data);
    }
    public function categoryView()
    {
        $data['categories'] = Category::where('status', 1)->latest()->get();
        return view('frontend.category.index', $data);
    }
    public function packagedetails($id){
        $data['items'] = Tour::find($id);
        $data['departures'] = Package_departure::where('tour_id',$id)->get();
        $data['dayactivitys'] = DayActivity::where('tour_id',$id)->get();
        $data['days'] = Day::where('tour_id',$id)->get();
        return view('frontend.package.package-details',$data);
    }

    public function submitpackagebooking(Request $request){
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
        return back()->with('success','Package Booked Successfully');
    }
    public function contactus(){
        return view('frontend.contact-us.index');
    }

    public function contactformsubmit(Request $request){
       Message::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
       ]);
       return back()->with('success','Message Send Successfully');
    }

    public function newslettersubmit(Request $request){
        Newsletter::create([
            'email'=>$request->email,
        ]);
        return back();
    }
}

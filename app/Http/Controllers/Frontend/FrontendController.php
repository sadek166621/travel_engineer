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
use App\Models\Admin\Tickets;
use App\Models\Admin\Origin;
use App\Models\Admin\Destination;
use App\Models\Admin\Offer;


class FrontendController extends Controller
{
    public function index(){
        $data['sliders'] = Slider::where('status', 1)->orderBy('id','desc')->get();
        $data['packages'] = Tour::where('status', 1)->orderBy('id','desc')->take(4)->get();
        $data['countries'] = Country::where('status', 1)->orderBy('name', 'asc')->get();
        $data['places'] = Place::where('status', 1)->orderBy('name', 'asc')->get()->take(6);
        $data['categories'] = Category::where('status', 1)->orderBy('name', 'asc')->get()->take(8);
        $data['testimonials'] = Testimonial::where('status', 1)->orderBy('created_at', 'desc')->get();
        $data['blogs'] = Blog::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.home.index',$data);
    }

    public function allpackages(){
        $data['packages'] = Tour::where('status', 1)->orderBy('id','desc')->get();
        // $data['dayactivitys'] = DayActivity::where('tour_id',$id)->get();
        return view('frontend.all-package.index',$data);
    }

    public function flighttickets(){
        $data['origins']= Origin::where('status', 1)->orderBy('id','desc')->get();
        $data['destinations']= Destination::where('status', 1)->orderBy('id','desc')->get();
        return view('frontend.flight-tickets.index',$data);
    }
    public function blog(){
        $data['blogs'] = Blog::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.blog.index',$data);
    }

    public function blogdetails($id){
        $data['blogs'] = Blog::where('id',$id)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.blog.blog-details',$data);
    }

    public function menupackagedetails($id){
        $data['packages'] = Tour::where('country', $id)->where('status', 1)->orderBy('id','desc')->get();
        return view('frontend.all-package.country-package',$data);
    }

    public function about(){
        return view('frontend.about.index');
    }
    public function offer(){
        return view('frontend.offer.index',[
            'offers'=> $offers =  Offer::where('status', 1)->orderBy('id','desc')->get(),
        ]);
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
        // return $request;
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'expected_travel_date' => 'required',
            'package_name' => 'required',
            // 'departure_point' => 'required',
            'no_of_person' => 'required',
        ]);

        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'expected_travel_date' => $request->expected_travel_date,
            'package_name' => $request->package_name,
            // 'departure_point' => $request->departure_point,
            'no_of_person' => $request->no_of_person,
        ]);

        // Toastr::success('Successfully Added', 'Screen-Printing', ["positionClass" => "toast-top-right"]);
        return back()->with('success','Package Booked Successfully');
    }
    public function contactus(){
        return view('frontend.contact-us.index');
    }

    public function contactformsubmit(Request $request){
        // return $request;
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

    public function submittickets(Request $request){
        // return $request;
        Tickets::create([
            'way'=>$request->way,
            'origin'=>$request->origin,
            'destination'=>$request->destination,
            'adult'=>$request->adult,
            'children'=>$request->children,
            'infants'=>$request->infants,
            'departure_date'=>$request->departure_date,
            'return_date'=>$request->return_date,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
        return back()->with('success','Information Submitted Successfully');
    }

    public function countrys(){

        $data['countries'] = Country::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.country.index',$data);
    }
}

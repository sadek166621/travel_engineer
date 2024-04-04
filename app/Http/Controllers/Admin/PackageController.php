<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Country;
use App\Models\Admin\Place;
use App\Models\Admin\Tour;
use App\Models\Admin\Day;
use App\Models\Admin\DayActivity;
use App\Models\Admin\Departure;
use App\Models\Admin\Package_departure;
use Carbon\Carbon;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::orderBy('id','desc')->get();
        return view('admin.package.list',compact('tours'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryies = Category::where('status', 1)->orderBy('name','desc')->get();
        $countries = Country::where('status', 1)->orderBy('name','desc')->get();
        $departures = Departure::where('status', 1)->orderBy('name','desc')->get();
       return view('admin.package.form',compact('categoryies','countries','departures'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return $request;
//         dd($request);
        // return $request->hasFile("image2[${i}][${j}]");
        // return $request->image1[1][0];

        $request->validate([

            'name' => 'required',
            'country' => 'required',
            'night' => 'required',
            'days' => 'required',
            'thumbnail' => 'required||mimes:jpeg,png,jpg,gif',

        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        if (!$request->special || $request->special == NULL) {
            $request->special = 0;
        } else {
            $request->special = 1;
        }
        // Create a new tour
        $image = $request->file('thumbnail');
        if($image){
            $currentDate = Carbon::now()->toDateString();
            //dd($image->getClientOriginalExtension());

            $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('uploads/package_thumbnail')) {
                mkdir('uploads/package_thumbnail', 0777, true);
            }

            $image->move(public_path('uploads/package_thumbnail'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/photogallerys', $imageName);

            $image = $imageName;
        }

        $tour = Tour::create([
            'name' => $request->name,
            'night' => $request->night,
            'days' => $request->days,
            // 'no_of_people' => $request->no_of_people,
            'price' => $request->price,
            'country' => $request->country,
            'place' => $request->place,
            'age' => $request->age,
            'daterange' => $request->daterange,
            'exception' => $request->exception,
            'thumbnail' => $image,
            'category' => $request->category,
            'includes' => $request->includes,
            'exclude' => $request->exclude,
            'important_note' => $request->important_note,
            'terms' => $request->terms,
            'status' => $request->status,
            'special' => $request->special,
            'booking_offer' => $request->booking_offer,
        ]);

        // foreach($request->departure_point as $departure){

        //     Package_departure::create([
        //         'tour_id' => $tour->id,
        //         'departure_id' => $departure,
        //     ]);

        // }

        // Loop through days and activities to create related records
        for($i = 0; $i<count($request->day_title); $i++){
        // foreach ($request->input('day_title') as $key => $dayTitle) {
            // Create a new day instance for each day
            $day = new Day([
                'tour_id' => $tour->id, // Assign the tour id
                'title' => $request->day_title[$i],
            ]);
            $day->save();

            for($j = 0; $j<count($request->activity[$i+1]); $j++){
                $image1 = null;
                $image2 = null;
                if(isset($request->file("image1")[$i+1][$j])){
                    $temp = $request->file("image1")[$i+1][$j];
                    // return $temp;
                    // dd($temp);
                    $currentDate = Carbon::now()->toDateString();
                    //dd($image->getClientOriginalExtension());
                    $imageName1 = $currentDate . '-' . uniqid() . '.' . $temp->getClientOriginalExtension();
                    if (!file_exists('uploads/activity')) {
                        mkdir('uploads/activity', 0777, true);
                    }
                    $temp->move(public_path('uploads/activity'), $imageName1);
                    // $image->move(base_path().'/assets/images/uploads/photogallerys', $imageName);
                    $image1 = $imageName1;
                }
                if(isset($request->file("image2")[$i+1][$j])){
                    // return $image1[$j+1];
                    $temp = $request->file("image2")[$i+1][$j];
                    // return $temp;
                    // dd($temp);
                    $currentDate = Carbon::now()->toDateString();
                    //dd($image->getClientOriginalExtension());
                    $imageName = $currentDate . '-' . uniqid() . '.' . $temp->getClientOriginalExtension();
                    if (!file_exists('uploads/activity')) {
                        mkdir('uploads/activity', 0777, true);
                    }
                    $temp->move(public_path('uploads/activity'), $imageName);
                    // $image->move(base_path().'/assets/images/uploads/photogallerys', $imageName);
                    $image2 = $imageName;
                }

                $dayActivity = new DayActivity([
                    'tour_id' => $tour->id,
                    'day_id' => $day->id,
                    'activity' => $request->activity[$i+1][$j],
                    'image1'=>$image1,
                    'image2'=>$image2,
                ]);
                $dayActivity->save();
                }


        }

        return redirect()->route('admin.package.list')->with('success', 'Package added successfully.');

    }
    public function edit($id)
    {
        $data['categoryies'] = Category::where('status', 1)->orderBy('name','desc')->get();
        $data['countries'] = Country::where('status', 1)->orderBy('name','desc')->get();
        $data['departures'] = Departure::where('status', 1)->orderBy('name','desc')->get();
        $data['tour'] = Tour::findOrFail($id);
        $data['days'] = Day::where('tour_id', $id)->get();
        $data['places'] = Place::where('country_id', $data['tour']->country)->get();
        $data['package_departure'] = Package_departure::where('tour_id', $id)->get();
        $data['activities'] = DayActivity::where('tour_id', $id)->get();
//        return $data;
        return view('admin.package.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //    return $request;
        $request->validate([

            'name' => 'required',
            'country' => 'required',
            'night' => 'required',
            'days' => 'required',
            'thumbnail' => 'mimes:jpeg,png,jpg,gif',

        ]);


        $tour = Tour::findOrFail($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        if (!$request->special || $request->special == NULL) {
            $request->special = 0;
        } else {
            $request->special = 1;
        }

        $image = $request->file('thumbnail');
        if($image){
            $currentDate = Carbon::now()->toDateString();
            //dd($image->getClientOriginalExtension());

            $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('uploads/package_thumbnail')) {
                mkdir('uploads/package_thumbnail', 0777, true);
            }

            $image->move(public_path('uploads/package_thumbnail'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/photogallerys', $imageName);

            $image = $imageName;
        }
        else{
            $image = $tour->thumbnail;
        }

        $tour->update([
            'name' => $request->name,
            'night' => $request->night,
            'days' => $request->days,
            'no_of_people' => $request->no_of_people,
            'price' => $request->price,
            'country' => $request->country,
            'place' => $request->place,
            'age' => $request->age,
            'daterange' => $request->daterange,
            'exception' => $request->exception,
            'thumbnail' => $image,
            'category' => $request->category,
            'includes' => $request->includes,
            'exclude' => $request->exclude,
            'status' => $request->status,
            'special' => $request->special,
            'important_note' => $request->important_note,
            'terms' => $request->terms,
        ]);
        Package_departure::where('tour_id', $id)->delete();
        Day::where('tour_id', $id)->delete();
        DayActivity::where('tour_id', $id)->delete();
        // dd($request);

        for($i = 1; $i<=count($request->day_title); $i++){
            // foreach ($request->input('day_title') as $key => $dayTitle) {
                // Create a new day instance for each day
                $day = new Day([
                    'tour_id' => $tour->id, // Assign the tour id
                    'title' => $request->day_title[$i-1],
                ]);
                $day->save();
                for($j = 1; $j<=count($request->activity); $j++){
                    // dd($request->activity[$i]);

                        $dayActivity = new DayActivity([
                            'tour_id' => $tour->id,
                            'day_id' => $day->id,
                            'activity' => $request->activity[$j-1],
                        ]);
                        $dayActivity->save();

                    }

                }


        return redirect()->route('admin.package.list')->with('success', 'Package updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Package_departure::where('tour_id', $id)->delete();
        Day::where('tour_id', $id)->delete();
        $this->removeActivity($id);
        Tour::where('id', $id)->delete();

        return redirect()->route('admin.package.list')->with('success', 'Package deleted successfully.');
    }

    public function getPlacesByCountry($countryId)
    {
        $places = Place::where('country_id', $countryId)->get();
        return response()->json($places);
    }

    private function removeActivity($id)
    {
        foreach (DayActivity::where('tour_id', $id)->get() as $activity){
            if ($activity->image1){
                unlink('uploads/activity/'.$activity->image1);
            }
            if ($activity->image2){
                unlink('uploads/activity/'.$activity->image2);
            }
            $activity->delete();
        }
    }

    public function deleteDay()
    {

        $activities = DayActivity::where('tour_id', $_GET['tour_id'])->where('day_id', $_GET['day_id'])->get();
        foreach ($activities as $activity){
            if ($activity->image1){
                unlink('uploads/activity/'.$activity->image1);
            }
            if ($activity->image2){
                unlink('uploads/activity/'.$activity->image2);
            }
            $activity->delete();
        }
        $day = Day::find($_GET['day_id']);
        $day->delete();
        return response()->json(true);
    }

    public function deleteActivity()
    {
        $activity = DayActivity::find($_GET['id']);
        $activity->delete();

        return response()->json(true);
    }
}

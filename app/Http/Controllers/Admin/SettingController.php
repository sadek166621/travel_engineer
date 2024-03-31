<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\admin\Setting;
use App\Models\Message;
use App\Models\Newsletter;


class SettingController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::first();
       return view('admin.setting.form',compact('setting'));
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
        $setting = Setting::findOrFail($id);


            $fav = $setting->fav_icon;
            $image = $request->file('fav_icon');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                $fav = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


                if (!file_exists('assets/images/uploads/settings')) {
                    mkdir('assets/images/uploads/settings', 0777, true);
                }
                $image->move(public_path('assets/images/uploads/settings'), $fav);
                // $image->move(base_path().'/assets/images/uploads/settings', $fav);

            }


            $icon = $setting->logo;
            $image_icon = $request->file('logo');
            if($image_icon){
                $currentDate = Carbon::now()->toDateString();
                $icon = $currentDate.'-'.uniqid().'.'.$image_icon->getClientOriginalExtension();


                if (!file_exists('assets/images/uploads/settings')) {
                    mkdir('assets/images/uploads/settings', 0777, true);
                }
                $image_icon->move(public_path('assets/images/uploads/settings'), $icon);
                // $image_icon->move(base_path().'/assets/images/uploads/settings', $icon);

            }

            if($setting){
                $setting->update([
                    'site_name' => $request->site_name,
                    'logo' =>$icon,
                    'fav_icon' =>$fav,
                    'map' => $request->map,
                    'telephone' => $request->telephone,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'email' => $request->email,
                    'facebook_link' => $request->facebook_link,
                    'instagram_link	' => $request->instagram_link	,
                    'linkedin_link' => $request->linkedin_link,
                    'twitter_link' => $request->twitter_link,
                    'youtube_link' => $request->youtube_link,
                ]);


            // Toastr::success('Settings updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function message(){
        $messages = Message::orderBy('id','desc')->get();
        return view('admin.message.list',compact('messages'));
    }

    public function newsletter(){
        $newsletters = Newsletter::orderBy('id','desc')->get();
        return view('admin.news-letter.list',compact('newsletters'));
    }
}

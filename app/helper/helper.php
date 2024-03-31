<?php
use App\Models\Admin\Category;
use App\Models\Admin\Setting;

function saveImageUrl($request, $name, $directory){
    $image = $request->file($name);
    $imageName = $request->name. '.' . $image->extension();
    $directory = 'uploads/'.$directory.'/';
    $imageUrl = $directory.$imageName;
    $image->move($directory, $imageName);

    return $imageUrl;
}


    function get_subcategories($id)
    {
       $cats = Category::where('status', 1)->where('cat_id', $id)->get();
       return count($cats);
    }


    if (!function_exists('getSetting')) {
        function getSetting()
        {
            $setting = Setting::first();
            return $setting;
        }
    }


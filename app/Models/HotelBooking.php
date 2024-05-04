<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Country;
use App\Models\Admin\Hotel;

class HotelBooking extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Country()
    {
        return $this->belongsTo(Country::class, 'country');
    }

    public function Hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_name');
    }

}

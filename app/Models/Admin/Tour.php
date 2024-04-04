<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Country()
    {
        return $this->belongsTo(Country::class, 'country');
    }

    public function Cat()
    {
        return $this->belongsTo(Category::class, 'category');
    }

    public function Place()
    {
        return $this->belongsTo(Place::class, 'place');
    }

    public function dayactivity()
    {
        return $this->hasMany(DayActivity::class, 'tour_id');
    }

}

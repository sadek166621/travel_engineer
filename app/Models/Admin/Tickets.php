<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function origins()
    {
        return $this->belongsTo(Origin::class, 'origin');
    }

    public function destinations()
    {
        return $this->belongsTo(Destination::class, 'destination');
    }

}

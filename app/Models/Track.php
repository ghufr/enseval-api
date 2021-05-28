<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        "temp",
        "fuel_capacity",
        "speed",
        // "distance_from_arrival",
        "loc_lat",
        "loc_lng",
        "delivery_id",
        "status"
    ];
}

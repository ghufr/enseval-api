<?php

namespace App\Models\Logistics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;
    protected $table = "pickup";
    protected $guarded = [];
    protected $fillable = [
        'location',
        'date',
        'address',
    ];
}

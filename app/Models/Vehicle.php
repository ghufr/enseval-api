<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;

    protected $table = "vehicle";
    protected $guarded = [];
    protected $fillable = [
        'name',
        'type',
        'fuel_capacity',
        'fuel_efficiency',
        'cargo_area'
    ];
}

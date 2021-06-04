<?php

namespace App\Models\Logistics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table = "delivery";
    protected $guarded = [];
    public $timestamps = false;

    public function driver()
    {
        return $this->belongsToMany(Driver::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function vehicle()
    {
        return $this->belongsToMany(Vehicle::class);
    }
}

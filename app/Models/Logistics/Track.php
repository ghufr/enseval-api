<?php

namespace App\Models\Logistics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * @OA\Schema(
 *      description="Track Model",
 *      title="Track"
 *
 * )
 */
class Track extends Model
{
    use HasFactory;
    protected $table = "track";

    protected $fillable = [
        "temp",
        "fuel_capacity",
        "speed",
        "loc_lat",
        "loc_lng",
        "delivery_id",
        "status"
    ];
}

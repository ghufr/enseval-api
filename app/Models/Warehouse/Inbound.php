<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    use HasFactory;
    protected $table = "inbound";

    protected $fillable = [
        "cost",
        "warehouse_id",
        "product_id",
        "quantity"
    ];

    public function warehouse()
    {
        return $this->belongsToMany(Warehouse::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}

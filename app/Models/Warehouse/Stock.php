<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = "stock";

    protected $fillable = [
        "product_id",
        "quantity"
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}

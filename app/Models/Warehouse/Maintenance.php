<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
	use HasFactory;
	protected $table = "maintenance";

	protected $fillable = [
		"warehouse_id",
		"product_id",
		"quantity_exp",
		"date"
	];

	public function product()
	{
		return $this->belongsToMany(Product::class);
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	use HasFactory;
	protected $table = "customer";
	protected $guarded = [];
	protected $fillable = [
		'first_name',
		'last_name',
		'business_name',
		'addresses',
	];
}

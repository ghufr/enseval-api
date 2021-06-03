<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use App\Models\penjemputan;
use Illuminate\Support\Facades\DB;

class CostController extends Controller
{

    public function find()
    {
        $receipt = DB::table('penjemputan')
            ->select(
                'penjemputan_id',
                'cost'
            )
            ->get();
        return $receipt;
    }
}

<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function find()
    {
        $result = Track::all();
        return response()->json($result);
    }

    public function findOne(Request $req, $id)
    {
        $result = Track::find($id);

        return response()->json($result);
    }

    public function create(Request $req)
    {
        $result = Track::create([
            "temp" => $req->temp,
            "fuel_capacity" => $req->fuel_capacity,
            "speed" => $req->speed,
            "loc_lat" => $req->loc_lat,
            "loc_lng" => $req->loc_lng,
            "delivery_id" => $req->delivery_id,
            "status" => 'running'
        ]);
        return response()->json($result);
    }

    public function update(Request $req, $id)
    {
        $result = Track::find($id);
        $result->temp = $req->temp;
        $result->fuel_capacity = $req->fuel_capacity;
        $result->speed = $req->speed;
        $result->loc_lat = $req->loc_lat;
        $result->loc_lng = $req->loc_lng;
        $result->delivery_id = $req->delivery_id;
        $result->status = 'running';

        return response()->json($result);
    }

    public function delete(Request $req, $id)
    {
        $result = Track::destroy($id);
        return response()->json(['success' => $result > 0]);
    }
}

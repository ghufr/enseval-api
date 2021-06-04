<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;


/**
 * @OA\Tag(
 *  name="Vehicle",
 *  description="API Endpoint Vehicle"
 * 	)
 */

class VehicleController extends Controller
{
    public function find()
    {
        $result = Vehicle::all();
        return response()->json($result);
    }

    public function findOne($id)
    {
        $result = Vehicle::find($id);

        if (!$result) return response()->json(["error" => true]);

        return response()->json($result);
    }

    public function create(Request $req)
    {
        $result = Vehicle::create([
            "type" => $req->type,
            "capacity" => $req->capacity,
            "status" => $req->status,
            "fuel_capacity" => $req->fuel_capacity,
            "brand" => $req->brand

        ]);


        if (!$result) return response()->json(['error' => true]);
        return response()->json($result);
    }

    public function delete($id)
    {
        $result = Vehicle::destroy($id);
        return response()->json(['error' => $result == 0]);
    }

    public function update(Request $req, $id)
    {
        $result = Vehicle::find($id);
        if (!$result) return response()->json(["error" => true]);

        // TODO: Edit

        return response()->json($result);
    }
}

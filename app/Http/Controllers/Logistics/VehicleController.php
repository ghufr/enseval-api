<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

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

        if (!$result) return response(404)->json(["error" => true]);

        return response()->json($result);
    }

    public function create(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->type = $request->type;
        $vehicle->capacity = $request->capacity;
        $vehicle->status = $request->status;
        $vehicle->fuel_capacity = $request->fuel_capacity;
        $vehicle->brand = $request->brand;
        $save = $vehicle->save();

        if (!$save) return response()->json(['success' => false]);
        return response()->json(['success' => true]);
    }

    public function delete($id)
    {
        $result = Vehicle::destroy($id);
        return response()->json(['error' => $result == 0]);
    }

    public function update(Request $req, $id)
    {
        $result = Vehicle::find($id);
        if (!$result) return response(404)->json(["error" => true]);

        // TODO: Edit

        return response()->json($result);
    }
}

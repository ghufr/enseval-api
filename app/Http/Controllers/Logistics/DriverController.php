<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{

    public function find()
    {
        $result = Driver::all();
        if (count($result) <= 0) return response(404)->json(["error" => true]);

        return response()->json($result);
    }

    public function findOne($id)
    {
        $result = Driver::find($id);

        if (!$result) return response(404)->json(["error" => true]);

        return response()->json($result);
    }


    public function create(Request $req)
    {
        $driver = new Driver();
        $driver->name = $req->name;
        $driver->phone = $req->phone;
        $driver->age = $req->age;
        $driver->status = $req->status;
        $save = $driver->save();

        if (!$save) return response()->json(['success' => false]);
        return response()->json(['success' => true]);
    }

    public function delete($id)
    {
        $result = Driver::destroy($id);
        return response()->json(['error' => $result == 0]);
    }
    public function update(Request $req, $id)
    {
        $result = Driver::find($id);
        if (!$result) return response(404)->json(["error" => true]);

        // TODO: Edit

        return response()->json($result);
    }
}

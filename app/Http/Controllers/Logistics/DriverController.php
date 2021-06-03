<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{

    public function find()
    {
        $result = driver::all();
        return response()->json($result);
    }

    public function findOne($id)
    {
        $result = driver::findOne($id);
        return response()->json($result);
    }


    public function create(Request $req)
    {
        $driver = new Driver;
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
        // TODO: Delete
    }
    public function update(Request $req, $id)
    {
        // TODO: Update
    }
}

<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{

    public function find()
    {
        $result = Delivery::all();
        return response()->json($result);
    }

    public function findOne($id)
    {
        // TODO: FindOne
    }

    public function create(Request $req)
    {
        $delivery = new Delivery();
        $delivery->driver_id = $req->driver_id;
        $delivery->product_id = $req->product_id;
        $delivery->vehicle_id = $req->vehicle_id;
        $delivery->delivery_type = $req->delivery_type;
        $delivery->destination_location = $req->destination_location;
        $delivery->pickup_location = $req->pickup_location;
        $delivery->date_pickup = $req->date_pickup;
        $delivery->fuel_consumption = $req->fuel_consumption;
        $delivery->cost = $req->cost;
        $save = $delivery->save();

        if (!$save) return response(400)->json(['success' => false]);
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




    // public function get($id, Request $request)
    // {
    //     $receipt = DB::table('delivery')
    //         ->where('penjemputan_id',  2)
    //         ->get();
    //     return $receipt;
    // }




    // public function receipt()
    // {
    //     $receipt = DB::table('delivery')
    //         ->join('product', 'penjemputan_id', '=', 'product.id')
    //         ->join('vehicle', 'penjemputan_id', '=', 'vehicle.id')
    //         ->join('driver', 'penjemputan_id', '=', 'driver.id')
    //         ->select(
    //             'product.product_name',
    //             'driver.driver_name',
    //             'vehicle.type',
    //             'vehicle.fuel_capacity',
    //             'penjemputan.fuel_consumption',
    //             // 'penjemputan.cost',
    //             'penjemputan.speed_avg',
    //             'penjemputan.pickup_location',
    //             'penjemputan.destination_location',
    //             'penjemputan.date_pickup',
    //             'penjemputan.date_arrived'
    //         )
    //         ->get();
    //     return $receipt;
    // }

    // public function delete()
    // {
    //     $save = DB::table('delivery')->where('delivery_id', 2)->delete();
    //     if ($save) {
    //         return ["Result" => 'Data Berhasil Didelete'];
    //     } else {
    //         return ["Result" => 'Data Tidak Terdelete'];
    //     }
    // }

    // public function update(request $request)
    // {
    //     $save = DB::table('penjemputan')->where('penjemputan_id',  1)->update([
    //         'destination_location' => $request->destination_location,
    //         'pickup_location' => $request->pickup_location
    //     ]);

    //     if ($save) {
    //         return ["Result" => 'Data Berhasil Disimpan'];
    //     } else {
    //         return ["Result" => 'Data Berhasil Tersimpan'];
    //     }
    // }
}

<?php

namespace App\Http\Controllers\FrontEnd\Logistik;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Logistics\Delivery;
use App\Models\Logistics\Track;
use App\Models\Vehicle;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Delivery::all();

        return view('pages.logistik.delivery.index', [
            'title' => 'Delivery',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver = Driver::where('status', 'Available')->get();
        $vehicle = Vehicle::where('status', 'Available')->get();

        return view('pages.logistik.delivery.create', [
            'title' => 'Tambah Delivery',
            'driver' => $driver,
            'vehicle' => $vehicle,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $res = Delivery::create($req->all());
        Track::create([
            "temp" => 0,
            "loc_lat" => -6.9,
            "loc_lng" => 100,
            "status" => "Pending",
            "delivery_id" => $res->id
        ]);
        return redirect()->route('logistik.delivery.index')->with('success', 'Delivery Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Delivery::find($id);

        return view('pages.logistik.delivery.create', [
            'title' => 'Ubah Delivery',
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Delivery::destroy($id);
        return redirect()->route('logistik.delivery.index')->with('success', 'Delivery Berhasil Dihapus.');
    }
}

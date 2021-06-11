<?php

namespace App\Http\Controllers\FrontEnd\Logistik;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Driver::all();
        return view('pages.logistik.driver.index', [
            'title' => 'Driver',
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
        $driver = Driver::get();
        return view('pages.logistik.driver.create', [
            'title' => 'Tambah Driver',
            'driver' => $driver
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
        $req->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'age' => ['required'],
            'status' => ['required']
        ]);

        Driver::create($req->all());

        return redirect()->route('logistik.driver.index')->with('success', 'Driver Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Driver::destroy($id);
        return redirect()->route('logistik.driver.index')->with('success', 'Driver Berhasil Dihapus.');
    }
}

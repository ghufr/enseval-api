@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Vehicle</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.vehicle.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="type" class="form-control-label">Tipe Kendaraan</label></div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="type" id="type">
                            <option value="Truck">Truck</option>
                            <option value="ColdBox">ColdBox</option>
                            <option value="Semi">Semi-Truck</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="capacity" class=" form-control-label">Kapasitas Kargo</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" name="capacity" id="capacity" cols="30" rows="5" class="form-control"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="fuel_capacity" class="form-control-label">Kapasitas Bahan Bakar</label></div>
                    <div class="col-5 col-md-9">
                        <input type="number" name="fuel_capacity" id="fuel_capacity" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="brand" class=" form-control-label">Brand</label></div>
                    <div class="col-5 col-md-9">
                        <select class="form-control" name="brand" id="brand">
                            <option value="Mercedes">Mercedes</option>
                            <option value="Scania">Scania</option>
                            <option value="Hino">Hino</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="status" class=" form-control-label">Status</label></div>
                    <div class="col-5 col-md-9">
                        <select class="form-control" name="status" id="status">
                            <option value="Available">Available</option>
                            <option value="Unavailable">Unavailable</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn btn-block btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
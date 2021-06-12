@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Delivery</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.delivery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="delivery_type" class=" form-control-label">Delivery Type</label></div>
                    <div class="col-12 col-md-9">
                        <select name="delivery_type" id="delivery_type" class="form-control">
                            <option value="Regular">Regular</option>
                            <option value="Express">Express</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="pickup_location" class=" form-control-label">Pickup</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="pickup_location" id="pickup_location" cols="30" rows="5" class="form-control"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="destination_location" class=" form-control-label">Destination</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="destination_location" id="destination_location" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="date_pickup" class=" form-control-label">Pickup Date</label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="date_pickup" id="date_pickup" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="driver_id" class=" form-control-label">Driver</label></div>
                    <div class="col-5 col-md-9">
                        <select name="driver_id" id="driver_id" class="form-control">
                            @foreach ($driver as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="vehicle_id" class=" form-control-label">Vehicle</label></div>
                    <div class="col-5 col-md-9">
                        <select name="vehicle_id" id="vehicle_id" class="form-control">
                            @foreach ($vehicle as $item)
                                <option value="{{ $item->id }}">{{ $item->type }} {{ $item->capacity }}</option>
                            @endforeach
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
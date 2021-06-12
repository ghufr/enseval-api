@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary"> {{ $title }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.driver.update') }}" method="put" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="temp" class=" form-control-label">Temp</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="temp" name=" temp" value="{{ $data->temp }}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="loc_lat" class=" form-control-label">Latitude</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="loc_lat" id="loc_lat" cols="30" rows="5" class="form-control" value="{{ $data->loc_lat }}"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="loc_lng" class=" form-control-label">Longitude</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="loc_lng" id="loc_lng" cols="30" rows="5" class="form-control" value="{{ $data->loc_lng }}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="delivery_id" class=" form-control-label">Delivery ID</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="delivery_id" id="delivery_id" cols="30" rows="5" class="form-control" value="{{ $data->delivery_id }}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="status" class=" form-control-label" value="{{ $data->status }}">Status</label></div>
                    <div class="col-5 col-md-9">
                        <select class="form-control" name="status" id="status">
                            <option value="active">Active</option>
                            <option value="deactive">Deactive</option>
                        </select>
                        {{-- <input type="text" name="status" id="status" cols="30" rows="5" class="form-control"></input> --}}
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
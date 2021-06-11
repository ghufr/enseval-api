@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Vehicle</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.driver.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="driver_name" class=" form-control-label">Tipe Kendaraan</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="driver_name" name=" driver_name">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="phone" class=" form-control-label">Nomor Handphone</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="phone" id="phone" cols="30" rows="5" class="form-control"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="age" class=" form-control-label">Usia</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="age" id="age" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="status" class=" form-control-label">Status</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="status" id="status" cols="30" rows="5" class="form-control"></input>
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
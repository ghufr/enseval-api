@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Produk</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.produk.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="name" class=" form-control-label">Nama Produk</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="name" name=" name">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="weight" class=" form-control-label">Berat Produk</label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" name="weight" id="weight" class="form-control"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="length" class=" form-control-label">Panjang Produk</label></div>
                    <div class="col-5 col-md-9">
                        <input type="number" name="length" id="length" class="form-control"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="width" class=" form-control-label">Lebar Produk</label></div>
                    <div class="col-5 col-md-9">
                        <input type="number" name="width" id="width" class="form-control"></input>
                    </div>
                </div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="width" class=" form-control-label">Tinggi Produk</label></div>
									<div class="col-5 col-md-9">
											<input type="number" name="width" id="width" class="form-control"></input>
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
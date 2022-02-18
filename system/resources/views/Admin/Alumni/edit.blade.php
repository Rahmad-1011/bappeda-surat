@extends('Admin.template.base')
@section('content')

			<div class="page-header">
              <h3 class="page-title"> Edit Data Alumni </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Data Alumni</h4>
                    <form action="{{url('Admin/alumni', $alumni->id)}}" method="post" class="forms-sample">
                    	@csrf
                    	<div class="row">
                    		<div class="col-md-6">
                    			<div class="form-group">
			                        <label>NIM</label>
			                        <input type="text" class="form-control" value="{{$alumni->nim}}" name="nim" placeholder="NIM">
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div class="form-group">
			                        <label>Nama Lengkap</label>
			                        <input type="text" class="form-control" value="{{$alumni->nama}}" name="nama" placeholder="Nama Lengkap">
                      			</div>
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="col-md-3">
                    			<div class="form-group">
			                        <label>Tempat Lahir</label>
			                        <input type="text" class="form-control" value="{{$alumni->tempat_lahir}}" name="tempat_lahir" placeholder="Tempat Lahir">
			                    </div>
                    		</div>
                    		<div class="col-md-3">
                    			<div class="form-group">
			                        <label>Tanggal Lahir</label>
			                        <input type="Date" name="tanggal_lahir" class="form-control">
			                    </div>
                    		</div>
                    		<div class="col-md-3">
                    			<div class="form-group">
			                        <label>Tahun Masuk</label>
			                        <input type="text" class="form-control" value="{{$alumni->tahun_msk}}" name="tahun_msk" placeholder="Tahun Masuk">
			                    </div>
                    		</div>
                    		<div class="col-md-3">
                    			<div class="form-group">
			                        <label>Tahun Lulus</label>
			                        <input type="text" class="form-control" value="{{$alumni->tahun_lls}}" name="tahun_lls" placeholder="Tahun Lulus">
			                    </div>
                    		</div>
                    	</div>
                      <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-check-circle"></i>Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>

@endsection
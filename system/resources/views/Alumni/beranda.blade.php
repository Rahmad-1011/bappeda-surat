@extends('Alumni.template.base')
@section('content')

<div class="container">
			<div class="page-header">
        <h3 class="page-title"> Beranda </h3>
      </div>
			
	    <div class="row">
        <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$alumni->count()}}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                    <div class="icon icon-box-success ">
                      <span class="mdi mdi-school icon-item"></span>
                    </div>
                  </div>
                </div>
              </div>
                <h6 class="text-muted font-weight-normal">Total Alumni</h6>
            </div>
          </div>
        </div>
</div>

<div class="container">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row border-bottom" style="text-align: center; margin-bottom: 20px;">
          <h4 class="card-title"> Data Alumni </h4>
        </div>
          <form action="{{url('Alumni/edit-data-alumni')}}" method="post" class="forms-sample" enctype="multipart/form-data">
             @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>NIM <b style="color: red;">*</b></label>
                    <input type="text" class="form-control" name="nim" placeholder="NIM" disabled value="{{$alumni->nim}} *" style="background-color: #2A3038; color: #A9A9A9;">
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Nama Lengkap <b style="color: red;">*</b></label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" disabled value="{{$alumni->nama}} *" style="background-color: #2A3038; color: #A9A9A9;">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label>NIK</label>
                      <input type="text" class="form-control" name="nik" placeholder="NIK" value="{{$alumni->nik}}">
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>Foto Profil</label>
                    <input type="file" class="form-control" name="foto" placeholder="Foto Profil" accept="image/*">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" value="{{$alumni->email}}" placeholder="Email">
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>No. Handphone</label>
                    <input type="text" class="form-control" name="no_hp" value="{{$alumni->no_hp}}" placeholder="No. Handphone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{$alumni->tempat_lahir}}" placeholder="Tempat Lahir">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="Date" name="tanggal_lahir" value="{{$alumni->tanggal_lahir}}" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <label>Tahun Masuk <b style="color: red;">*</b></label>
                    <input type="text" class="form-control" name="tahun_msk" value="{{$alumni->tahun_msk}}" placeholder="Tahun Masuk" disabled style="background-color: #2A3038; color: #A9A9A9;" >
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                      <label>Tahun Lulus <b style="color: red;">*</b></label>
                      <input type="text" class="form-control" name="tahun_lls" value="{{$alumni->tahun_lls}}" placeholder="Tahun Lulus" disabled style="background-color: #2A3038; color: #A9A9A9;" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Alamat</label>
                      <textarea type="text" class="form-control" name="alamat" value="" placeholder="Alamat">{{$alumni->alamat}}</textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Domisili Anda Sekarang</label>
                      <input type="text" class="form-control" name="nama_domisili" value="{{$alumni->nama_domisili}}" placeholder="Isi Nama Kota*">
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
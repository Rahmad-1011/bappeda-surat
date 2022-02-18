@extends('Alumni.template.base')
@section('content')

<div class="container">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
          @include('Alumni.template.utils.notif')
      <div class="card-body">
        <div class="row border-bottom" style="text-align: center; margin-bottom: 20px;">
          <h4 class="card-title"> Ganti Password </h4>
        </div>
          <form action="{{url('Alumni/ganti-password')}}" method="post" class="forms-sample">
             @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <label>Password Lama</label>
                    <input type="password" class="form-control" name="lama" placeholder="Password Lama" required>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" class="form-control" name="baru" placeholder="Password Baru" required>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label>Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" name="konfirmasi" placeholder="Konfirmasi Password" required>
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

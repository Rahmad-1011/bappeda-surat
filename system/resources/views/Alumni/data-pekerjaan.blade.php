@extends('Alumni.template.base')
@section('content')

<div class="container">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row border-bottom" style="text-align: center; margin-bottom: 20px;">
          <h4 class="card-title"> Data Pekerjaan </h4>
        </div>
          <form action="{{url('Alumni/edit-data-pekerjaan')}}" method="post" class="forms-sample">
             @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Tempat Kerja</label>
                    <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Nama Tempat Bekerja" value="{{$alumni->nama_pekerjaan}}">
                </div> 
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tahun Mulai Kerja</label>
                    <input type="text" class="form-control" name="tahun_kerja" placeholder="Tahun Mulai Kerja" value="{{$alumni->tahun_kerja}}">
                  </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email Tempat Kerja</label>
                    <input type="email" class="form-control" name="email_kerja" value="{{$alumni->email_kerja}}" placeholder="Email Tempat Kerja">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Alamat Tempat Kerja</label>
                      <textarea type="text" class="form-control" name="alamat_pekerjaan" placeholder="Alamat Tempat Kerja">{{$alumni->alamat_pekerjaan}}</textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                      <label>Riwayat Pekerjaan</label>
                      <textarea id="dsc" class="form-control" name="histori_pekerjaan">{!!nl2br($alumni->histori_pekerjaan)!!}</textarea>
                  </div>
              <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-check-circle"></i>Simpan</button>
            </form>
          </div>
        </div>
      </div>
</div>


@endsection

@push('style')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#dsc').summernote();
    });
  </script>
@endpush
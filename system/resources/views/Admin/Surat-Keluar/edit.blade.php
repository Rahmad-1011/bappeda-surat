@extends('Admin.template.base')
@section('content')

<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Surat Keluar</h2>
        <a class="btn btn-app" href="{{url('Admin/surat-keluar')}}" style="float: right; border-radius: 15px; background-color:  #2A3F54; color: #ECF0F1;">
          <i class="fa fa-arrow-left"></i> Kembali
        </a>
      <div class="clearfix"></div>
    </div>
                  <div class="x_content">
                      <form method="POST" action="{{url('Admin/surat-keluar/simpan', $srt_klr->id)}}" enctype="multipart/form-data">
                                      @method("PUT")
                                      @csrf
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="no-urut">No. Urut
                                          </label>
                                          <input type="text" id="no-urut" name="no_urut" required="required" class="form-control" value="{{$srt_klr->no_urut}}">
                                        </div>

                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="tanggal">Tanggal
                                          </label>
                                          <input id="tanggal" class="date-picker form-control" name="tanggal" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" value="{{$srt_klr->tanggal}}">
                                          <script>
                                            function timeFunctionLong(input) {
                                              setTimeout(function() {
                                                input.type = 'text';
                                              }, 60000);
                                            }
                                          </script>
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="no-surat">No. Surat
                                          </label>
                                          <input type="text" id="no-surat" name="no_surat" required="required" class="form-control" value="{{$srt_klr->no_surat}}">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="perihal">Perihal
                                          </label>
                                          <input type="text" id="perihal" name="perihal" required="required" class="form-control" value="{{$srt_klr->perihal}}">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="lampiran">Uraian
                                          </label>
                                          <textarea type="text" id="lampiran" name="uraian" required="required" class="form-control">{!!nl2br($srt_klr->uraian)!!}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-6 col-sm-6" for="asal">Unit Kerja/Bagian/Bidang
                                          </label>
                                          <input type="text" id="asal" name="asal" required="required" class="form-control" value="{{$srt_klr->asal}}">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="file">File Scan Surat
                                          </label>
                                          <input type="file" id="file" name="file" required="required">
                                        </div>
                                      </div>
                                      <div class="ln_solid"></div>
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 offset-md-12">
                                          <button type="submit" class="btn btn-success" style="float: right;"><i class="fa fa-check"></i> Simpan</button>
                                        </div>
                                      </div>

                                    </form>
                  </div>
  </div>
</div>

@endsection
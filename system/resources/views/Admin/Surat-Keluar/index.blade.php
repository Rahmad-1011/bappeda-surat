@extends('Admin.template.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-ms-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>Surat</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              @include('Admin.Surat-Keluar.create')


              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Surat Keluar</h2>
                    <a style="float: right;">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create"><i class="fa fa-plus-square"></i> Surat Keluar</button>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No. Urut</th>
                          <th>Menu</th>
                          <th>Tanggal</th>
                          <th>No. Surat</th>
                          <th>Klasifikasi</th>
                          <th>Unit Kerja/Bagian/Bidang</th>
                          <th>#</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($list_srt_klr as $srt_klr)
                        <tr>
                          <td style="width: 70px;">{{$srt_klr->no_urut}}</td>
                          <td>
                            <div class="btn-group">
                              <a href="{{url('Admin/surat-keluar', $srt_klr->id)}}">
                                <button class="btn btn-info" name="view"><i class="fa fa-info"></i></button>
                              </a>
                              <a href="{{url('Admin/surat-keluar/edit', $srt_klr->id)}}">
                                <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                              </a>
                              <button class="btn btn-success" type="button"><i class="fa fa-file"></i></button>
                            </div>
                          </td>
                          <td>{{ date('d-M-Y', strtotime($srt_klr->tanggal)) }}</td>
                          <td>{{$srt_klr->no_surat}}</td>
                          <td>{{$srt_klr->klasifikasi}}</td>
                          <td>{{$srt_klr->unit}}</td>
                          <td>
                            <center>
                            <div class="btn-group">
                              @include('Admin.template.utils.delete', ['url'=>url('Admin/surat-keluar', $srt_klr->id)])
                            </div>
                            </center>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>

@endsection
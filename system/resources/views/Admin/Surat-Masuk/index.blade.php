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

              @include('Admin.Surat-Masuk.create')


              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Surat Masuk</h2>
                    <a style="float: right;">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create"><i class="fa fa-plus-square"></i> Surat Masuk</button>
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
                          <th style="width: 50px;">No. Urut</th>
                          <th>Sunting</th>
                          <th>Tanggal</th>
                          <th>No. Surat</th>
                          <th>Perihal</th>
                          <th>Uraian</th>
                          <th>Unit Kerja/Bagian/Bidang</th>
                          <th align="center">Detail</th>
                          <th>LPN</th>
                          <th>#</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($list_srt_msk as $srt_msk)
                        <tr>
                          <td style="width: 50px;">{{$srt_msk->no_urut}}</td>
                          <td>
                            <div class="btn-group">
                              <center>
                              <a href="{{url('Admin/surat-masuk/edit', $srt_msk->id)}}">
                                <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                              </a>
                              </center>
                            </div>
                          </td>
                          <td>{{ date('d-M-Y', strtotime($srt_msk->tanggal)) }}</td>
                          <td>{{$srt_msk->no_surat}}</td>
                          <td>{{$srt_msk->perihal}}</td>
                          <td>{{$srt_msk->uraian}}</td>
                          <td>{{$srt_msk->asal}}</td>
                          <td>
                            <center>
                              <a href="{{url('Admin/surat-masuk', $srt_msk->id)}}">
                                <button class="btn btn-info"><i class="fa fa-info"></i></button>
                              </a>
                            </center>
                          </td>
                          <td>
                            <center>
                              <button class="btn btn-success" type="button"><i class="fa fa-file"></i></button>
                            </center>
                          </td>
                          <td>
                            <center>
                            <div class="btn-group">
                              @include('Admin.template.utils.delete', ['url'=>url('Admin/surat-masuk', $srt_msk->id)])
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
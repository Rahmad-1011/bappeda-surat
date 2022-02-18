@extends('Admin.template.base')
@section('content')

            <div class="page-header">
              <h3 class="page-title"> Alumni </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                @include('Admin.template.utils.notif')
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Data Alumni</h4>
                      <div class="row" style="float: right; margin-bottom: 10px;">
                      <a href="{{url('Admin/alumni/create')}}">
                        <button type="button" class="btn btn-inverse-primary btn-fw"><span class="mdi mdi-account-plus icon-item"></span> Tambah Data Alumni</button>
                      </a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Aksi </th>
                            <th> NIM </th>
                            <th> Nama Lengkap </th>
                            <th> Tahun Masuk </th>
                            <th> Tahun Keluar </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($list_alumni as $alumni)
                          <tr>
                            <td> {{$loop->iteration}} </td>
                            <td>
                              <div class="btn-group">
                                <a href="{{url('Admin/alumni', $alumni->id)}}" class="btn btn-primary btn-rounded"><i class="mdi mdi-information-outline"></i> Detail
                                </a>
                                <a href="{{url('Admin/alumni', $alumni->id)}}/edit" class="btn btn-warning btn-rounded">
                                  <i class="mdi mdi-lead-pencil"></i> Edit
                                </a>
                                @include('Admin.template.utils.delete', ['url'=>url('Admin/alumni', $alumni->id)])
                              </div>
                            </td>
                            <td> {{$alumni->nim}} </td>
                            <td> {{$alumni->nama}} </td>
                            <td> {{$alumni->tahun_msk}} </td>
                            <td> {{$alumni->tahun_lls}} </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
@extends('Admin.template.base')
@section('content')

            <div class="page-header">
              <h3 class="page-title"> Alumni </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Data Alumni</h4>
                    <div class="table-responsive">
                      <div class="row">
                        <div class="col-lg-4">
                          @if(!empty($user->foto))
                              <img class="img-lg rounded-circle" style="width: 200px; height: 200px;" src="{{url("public/$user->foto")}}" alt="">
                          @else
                              <img class="img-lg rounded-circle" style="width: 200px; height: 200px;" src="{{url('public')}}/assets/images/faces/face15.jpg" alt="">
                          @endif
                        </div>
                        <div class="col-lg-8">
                          <table class="table table-bordered table-striped">
                            <tbody style="color: #fff;">
                              <tr>
                                <td> Nama </td>
                                <td>
                                  {{$user->nama}}
                                </td>
                              </tr>
                              <tr>
                                <td> NIK </td>
                                <td>
                                  {{$user->nik}}
                                </td>
                              </tr>
                              <tr>
                                <td> Email </td>
                                <td>
                                  {{$user->email}}
                                </td>
                              </tr>
                              <tr>
                                <td> NIM </td>
                                <td>
                                  {{$user->nim}}
                                </td>
                              </tr>
                              <tr>
                                <td> Domisili </td>
                                <td>
                                  {{$user->nama_domisili}}
                                </td>
                              </tr>
                              <tr>
                                <td> Alamat </td>
                                <td>
                                  {{$user->alamat}}
                                </td>
                              </tr>
                              <tr>
                                <td> Tempat Lahir </td>
                                <td>
                                  {{$user->tempat_lahir}}
                                </td>
                              </tr>
                              <tr>
                                <td> Tanggal Lahir </td>
                                <td>
                                  {{$user->tanggal_lahir}}
                                </td>
                              </tr>
                              <tr>
                                <td> Tahun Masuk </td>
                                <td>
                                  {{$user->tahun_msk}}
                                </td>
                              </tr>
                              <tr>
                                <td> Tahun Lulus </td>
                                <td>
                                  {{$user->tahun_lls}}
                                </td>
                              </tr>
                              <tr>
                                <td> Tahun Lulus </td>
                                <td>
                                  {{$user->tahun_lls}}
                                </td>
                              </tr>
                              <tr>
                                <td> Nama Tempat Kerja </td>
                                <td>
                                  {{$user->nama_pekerjaan}}
                                </td>
                              </tr>
                              <tr>
                                <td> Tahun Mulai Kerja </td>
                                <td>
                                  {{$user->tahun_kerja}}
                                </td>
                              </tr>
                              <tr>
                                <td> Alamat Kerja </td>
                                <td>
                                  {{$user->alamat_pekerjaan}}
                                </td>
                              </tr>
                              <tr>
                                <td> Email Tempat Kerja </td>
                                <td>
                                  {{$user->email_kerja}}
                                </td>
                              </tr>
                              <tr>
                                <td> Riwayat Pekerjaan </td>
                                <td>
                                  {!!nl2br($user->histori_pekerjaan)!!}
                                </td>
                              </tr>
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
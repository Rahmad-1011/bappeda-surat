<div class="modal fade bd-example-modal-lg" id="create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Surat Masuk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('Admin/surat-masuk/simpan')}}" enctype="multipart/form-data">
                                      @csrf
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="no-urut">No. Urut
                                          </label>
                                          <input type="text" id="no-urut" name="no_urut" required="required" class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="tanggal">Tanggal
                                          </label>
                                          <input id="tanggal" class="date-picker form-control" name="tanggal" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                                          <input type="text" id="no-surat" name="no_surat" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="perihal">Perihal
                                          </label>
                                          <input type="text" id="perihal" name="perihal" required="required" class="form-control">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="lampiran">Uraian
                                          </label>
                                          <textarea type="text" id="lampiran" name="uraian" required="required" class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-6 col-sm-6" for="asal">Unit Kerja/Bagian/Bidang
                                          </label>
                                          <input type="text" id="asal" name="asal" required="required" class="form-control">
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
                        </div>
                    </div>
                </div>
              </div>
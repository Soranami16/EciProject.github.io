<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="<?php echo base_url() . 'dashboard'; ?>">Home</a></li>
            <li class="breadcrumb-item active">Form Pengajuan Pengaktifan Tender Type</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Pengaktifan Tender Type</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Tanggal Pengajuan</label>
                      <div class="input-group date" id="datePengajuan" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datePengajuan" value="<?= session()->get('login_date') ?>" />
                        <div class="input-group-append" data-target="#datePengajuan" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" class="form-control" id="nama" value="<?= $name ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Tanggal Diperlukan</label>
                      <div class="input-group date" id="dateDiperlukan" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#dateDiperlukan" />
                        <div class="input-group-append" data-target="#dateDiperlukan" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Divisi</label>
                      <input type="text" name="divisi" class="form-control" id="divisi" value="<?= $divisi ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="TypeBaru">
                        <label class="custom-control-label" for="TypeBaru">Tender Type Baru</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="TypeLama">
                        <label class="custom-control-label" for="TypeLama">Tender Type Lama</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="tenderTypeBaruFields" style="display:none;">
                  <div class="form-group">
                    <label for="tenderTypeBaruField">Deskripsi Tender Type</label>
                    <input type="text" name="deskripsitendertype" class="form-control" id="DeskripsiTenderType" placeholder="Deskripsi Tender Type">
                  </div>
                  <div class="form-group">
                    <label for="edcbaru">EDC Baru</label>
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="Ya" class="custom-control-input" id="Ya">
                            <label class="custom-control-label" for="Ya">Ya</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="Tidak" class="custom-control-input" id="Tidak">
                            <label class="custom-control-label" for="Tidak">Tidak</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="EDCbaru" style="display:none;">
                      <div class="form-group">
                        <input type="text" name="EDC&MappingGLfield" class="form-control" id="EDC&MappingGLfield" placeholder="Di isi oleh Finance Dept">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tenderTypeBaruField">GL Mapping Tender</label>
                    <input type="text" name="deskripsitendertype" class="form-control" id="GLMappingtender" placeholder="Di isi oleh Finance Dept">
                  </div>
                  <div class="form-group">
                    <label for="KarakteristikTenderType">Karakteristik Tender Type</label>
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="SementaraTypeBaru" class="custom-control-input" id="SementaraTypeBaru">
                            <label class="custom-control-label" for="SementaraTypeBaru">Sementara</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="PermanenTypeBaru" class="custom-control-input" id="PermanenTypeBaru">
                            <label class="custom-control-label" for="PermanenTypeBaru">Permanen</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="SementaraTypeBaruField" style="display:none;">
                      <div class="form-group">
                        <label>Periode Aktif</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="far fa-calendar-alt"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control float-right" id="PeriodeAktif">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" name="KodeTenderType" class="form-control" id="KodeTenderType">
                      </div>
                    </div>
                  </div>
                </div>

                <div id="tenderTypeLamaFields" style="display:none;">
                  <div class="form-group">
                    <label for="KodeTenderType">Kode Tender Type</label>
                    <input type="text" name="KodeTenderType" class="form-control" id="KodeTenderType" placeholder=" Isi Kode Tender Type">
                  </div>
                  <div class="form-group">
                    <label for="DeskripsiTenderType">Deskripsi Tender Type</label>
                    <input type="text" name="DeskripsiTenderType" class="form-control" id="DeskripsiTenderType" placeholder="Isi Deskripsi Tender Type">
                  </div>
                  <div class="form-group">
                    <label for="KarakteristikTenderType">Karakteristik Tender Type</label>
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="SementaraTypeLama" class="custom-control-input" id="SementaraTypeLama">
                            <label class="custom-control-label" for="SementaraTypeLama">Sementara</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="PermanenTypeLama" class="custom-control-input" id="PermanenTypeLama">
                            <label class="custom-control-label" for="PermanenTypeLama">Permanen</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="SementaraTypeLamaField" style="display:none;">
                      <div class="form-group">
                        <label>Periode Aktif</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="far fa-calendar-alt"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control float-right" id="PeriodeAktifLama">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" name="KodeTenderType" class="form-control" id="KodeTenderType">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="submitPengajuanTender">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
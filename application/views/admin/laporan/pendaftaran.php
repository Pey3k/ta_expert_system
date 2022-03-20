
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Laporan Pendaftaran Pasien <i>HealthMe</i></h1>
          <p class="mb-4">Laporan pendaftaran pasien adalah laporan rekapitulasi keseluruhan data pasien yang telah terdaftar pada sistem pakar HealthMe</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary pb-2">Data Pendaftaran Pasien</h6>

              <a href="<?php echo base_url('admin/laporan/downloadPendaftaran') ?>">
            <button type="button" class="btn btn-sm btn-primary pull-left" data-dismiss="modal" style="font-size:14px">
                                  <i class="ace-icon fa fa-print"></i>
                                  CETAK LAPORAN PENDAFTARAN PASIEN
                              </button>
                            </a>
            </div>




            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pasien</th>
                      <th>Jenis Kelamin</th>
                      <th>Umur</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Tanggal Pendaftaran</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                                $no = 0 ;
                                foreach($listData as $value){
                                $no++;
                                 ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $value->nama_pengguna; ?></td>
                      <td><?php echo $value->jk; ?></td>
                      <td><?php echo $value->umur; ?></td>
                      <td><?php echo $value->username; ?></td>
                      <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->tanggal_pendaftaran; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


  <!-- Edit Modal-->

  <!-- Logout Modal-->
  <div class="modal fade" id="modalEditGejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Pasien</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

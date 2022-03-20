
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Ubah Data Pasien</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4"  style="width:900px">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Ubah Data Pasien</h6>
            </div>
            <div class="card-body">


                                <form method="post" action="<?php echo base_url().'admin/pasien/doUpdate/'.$this->uri->segment(4)?>" role="form">

                                <?php
                       $dataOld = $this->session->flashdata('oldPost');
                       echo $this->session->flashdata('msgbox');?>


                                <h6 class="m-0 font-weight-bold text-danger mb-3">Harap mengisi data dibawah ini :</h6>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="id_gejala">ID Pasien</label>
      <input type="text" class="form-control" style="width:400px" name="id_gejala" id="id_gejala" placeholder=""  value="<?php echo $detailData->id_pengguna ?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="bobot">Usia</label>
      <input type="text" class="form-control" style="width:200px" name="bobot"  value="<?php echo $detailData->umur ?>" id="bobot" placeholder="" >
    </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="bobot">Nama Pasien</label>
      <input type="text" class="form-control"  name="bobot" id="bobot"  value="<?php echo $detailData->nama_pengguna ?>" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="bobot">Jenis Kelamin</label>
      <input type="text" class="form-control"  style="width:300px" name="bobot" value="<?php echo $detailData->jk ?>" id="bobot" placeholder="" readonly >
    </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="bobot">Email</label>
      <input type="text" class="form-control"  name="bobot" value="<?php echo $detailData->email ?>"id="bobot" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="bobot">Username</label>
      <input type="text" class="form-control"  name="bobot" id="bobot" value="<?php echo $detailData->username ?>" placeholder="" >
    </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3" style="width:100px">Ubah</button>
  <a href="<?php echo base_url('admin/pasien') ?>" class="btn btn-danger ml-4 mt-3" style="width:100px">Batal</a>
</form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

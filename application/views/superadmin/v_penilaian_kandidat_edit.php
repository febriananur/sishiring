
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Penilaian Kandidat Promosi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
 
    
    
    <!-- Main content -->
    <section class="content">
<div class="container-fluid">
    <div class="card">

        <h6 class="card-header"><strong>Penilaian Kandidat Promosi</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url("superadmin/penilaian_kandidat/proses_edit/$promosi->id")?>" id="data" method="post" enctype='multipart/form-data'>

                <input type="hidden" name="id" value="<?php echo $promosi->id ?>">
                <input type="hidden" name="id_jabatan_kosong" value="<?php echo $promosi->id_jabatan_kosong ?>">
                <input type="hidden" name="id_karyawan" value="<?php echo $promosi->id_karyawan ?>">
                <input type="hidden" name="jadwal" value="<?php echo $promosi->jadwal ?>">
                <input type="hidden" name="status" value="<?php echo $promosi->status ?>">



    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 10px">No</th>
          <th>Aspek Penilaian</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td>1.</td>
          <td>Kreatif</td>
          <td>
            <input class="form-group" type="number" name="nilai_kreatif" id="nilai_kreatif" value="<?php echo $promosi->nilai_kreatif ?>">
          </td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Kerjasama</td>
          <td>
          <input class="form-group" type="number" name="nilai_kerjasama" id="nilai_kerjasama" value="<?php echo $promosi->nilai_kerjasama ?>">
          </td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Kemampuan Bekerja Sendiri</td>
          <td>
          <input class="form-group" type="number" name="nilai_kemampuan_bekerja" id="nilai_kemampuan_bekerja" value="<?php echo $promosi->nilai_kemampuan_bekerja ?>">
          </td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Kepemimpinan</td>
          <td>
          <input class="form-group" type="number" name="nilai_kepemimpinan" id="nilai_kepemimpinan" value="<?php echo $promosi->nilai_kepemimpinan ?>">
          </td>
        </tr>
      </tbody>
    </table>

<div class="total text-right">
      <!-- total dari field diatas secara otomatis -->
      <h4>Total : </h4>
      <input class="form-group" type="number" name="nilai_norma" id="nilai_norma" value="<?php echo $promosi->nilai_norma ?>">

      <!-- nilai norma hasil dari total -->
      <h5>Norma Penilaian : </h5>
      <input class="form-group" type="text" name="grade" id="grade" value="<?php echo $promosi->grade ?>">

    </div>
</div>



        <div class="card-footer text-center">
            <a href="<?php echo base_url('superadmin/penilaian_kandidat'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" name="ubah" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
        </div>
        <div>
        </form>
    </div>



</div>

</div>
<!-- End of Main Content -->
</section>
    <!-- /.content -->
  </div>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Kandidat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/adminhr/dashboard')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('/adminhr/penilaian')?>">Penilaian Kandidat </a></li>
              <li class="breadcrumb-item active">Daftar Kandidat </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main content -->
   
        <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Data Kandidat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Dept Sekarang</th>
                    <th>Posisi Sekarang</th>
                    <th>Action</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>tt001</td>
                    <td>Yeni</td>
                    <td>Engineer</td>
                    <td>Admin</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-input"><i class="nav-icon fas fa-pencil-alt"></i> Input Nilai</button>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-nilai"><i class="nav-icon fas fa-eye"></i> Lihat Nilai</button>
                    </td>
                    <td>-</td>
                  </tr>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Dept Sekarang</th>
                    <th>Posisi Sekarang</th>
                    <th>Action</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
        </div>
        <!-- /.row (main content) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- modal -->
  <div class="modal fade" id="modal-input">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Nilai</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
            <div class="card">
  
              <!-- /.card-header -->
              <div class="card-body p-0">
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
                        <input class="form-group"type="number" name="kreatif" id="kreatif">
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Kerjasama</td>
                      <td>
                        <input class="form-group"type="number" name="kerjasama" id="kerjasama">
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Kemampuan Bekerja Sendiri</td>
                      <td>   
                        <input class="form-group"type="number" name="mandiri" id="mandiri">
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Kepemimpinan</td>
                      <td>
                         <input class="form-group" type="number" name="pemimpin" id="pemimpin">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <div class="total text-right">
                  <!-- total diambil dari field diatas -->
                  <h4>Total : ___</h4>
                  <span>Nilai Norma </span><input type="number" class="form-group" name="norma" id="norma">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
      </div>
        <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- modal -->
  <div class="modal fade" id="modal-nilai">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hasil Nilai</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
            <div class="card">
  
              <!-- /.card-header -->
              <div class="card-body p-0">
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
                      <td>10</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Kerjasama</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Kemampuan Bekerja Sendiri</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Kepemimpinan</td>
                      <td>20</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <div class="total text-right">
                  <!-- total dari field diatas secara otomatis -->
                  <h4>Total : 70</h4>
                  <!-- nilai norma hasil dari total -->
                  <h5>Norma Penilaian : C</h5>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
      </div>
        <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
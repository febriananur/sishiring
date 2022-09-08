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
              <li class="breadcrumb-item active">Input kekosongan Jabatan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row (main content) -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Kekosongan Jabatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="posisi">Posisi</label>
                    <input type="text" class="form-control" id="posisi" placeholder="posisi">
                  </div>
                  <div class="form-group">
                    <label for="Dept">Dept</label>
                    <input type="text" class="form-control" id="Dept" placeholder="departement">
                  </div>
                  <div class="form-group">
                    <label for="Kuota">Kuota</label>
                    <input type="number" class="form-control" id="Kuota" placeholder="Kuota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
         </div>

         <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Data kekosongan Jabatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Posisi</th>
                    <th>Dept</th>
                    <th>Kuota</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Engineer</td>
                    <td>admin</td>
                    <td>2</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="nav-icon fas fa-pencil-alt"></i></button>
                      <button class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tfoot>
                  <tr>
                    <th>Posisi</th> 
                    <th>Dept</th>
                    <th>Kuota</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <!-- /.modal -->

  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Kekosongan Jabatan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="card card-primary">
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="posisi">Posisi</label>
                    <input type="text" class="form-control" id="posisi" placeholder="posisi">
                  </div>
                  <div class="form-group">
                    <label for="Dept">Dept</label>
                    <input type="text" class="form-control" id="Dept" placeholder="departement">
                  </div>
                  <div class="form-group">
                    <label for="Kuota">Kuota</label>
                    <input type="number" class="form-control" id="Kuota" placeholder="Kuota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
         </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
      <!-- /.modal -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  
</head>
<body class="hold-transition sidebar-mini">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Kunjung</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 0;
                    $query = mysqli_query ($koneksi, "SELECT * FROM kunjungan");
                    while ($visitor = mysqli_fetch_array($query)){
                      $no++
                    ?>    
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $visitor ['nama_siswa']; ?></td>
                    <td><?php echo $visitor ['waktu_kunjung']; ?></td>
                    <td><?php echo $visitor ['asal']; ?></td>
                    <td><?php echo $visitor ['tujuan']; ?></td>
                  </tr>
                  <?php } ?>      
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Kunjung</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>

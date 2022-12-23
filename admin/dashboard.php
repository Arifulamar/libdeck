<?php 
include ('../conf/config.php');

//mengambil data pengunjung
$datavisitor = mysqli_query ($koneksi, "SELECT * FROM kunjungan");

//menghitung jumlah pengunjung
$jumlahvisitor = mysqli_num_rows ($datavisitor);

//mengambil data pembaca
$membaca = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tujuan='membaca'");
//menghitung jumlah pembaca
$jumlahmembaca = mysqli_num_rows ($membaca);

//mengambil data meminjam buku
$pinjambuku = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tujuan='meminjam buku'");
//menghitung jumlah peminjam buku
$jumlahpeminjam = mysqli_num_rows ($pinjambuku);

//mengambil data diskusi 
$diskusi = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tujuan = 'diskusi'");
//menghitung jumlah diskusi
$jumlahdiskusi = mysqli_num_rows ($diskusi);

//mengambil data belajar
$belajar = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tujuan = 'belajar'");
//menghitung data belajar
$jumlahbelajar = mysqli_num_rows ($belajar);

//mengambil data kegiatan lainnya
$lainnya = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tujuan ='lainnya'");
//menghitung data kegiatan lainnya
$jumlahlainnya = mysqli_num_rows ($lainnya);

//mengambil data dari tanggal tertentu
$datavisitor = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()");
$jumlahdatavisitor = mysqli_num_rows ($datavisitor);
//tanggal H-1
$datavisitor1 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-1");
$jumlahdatavisitor1 = mysqli_num_rows ($datavisitor1);
//tanggal H-2
$datavisitor2 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-2");
$jumlahdatavisitor2 = mysqli_num_rows ($datavisitor2);
//tanggal H-3
$datavisitor3 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-3");
$jumlahdatavisitor3 = mysqli_num_rows ($datavisitor3);
//tanggal H-4
$datavisitor4 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-4");
$jumlahdatavisitor4 = mysqli_num_rows ($datavisitor4);
//tanggal H-5
$datavisitor5 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-5");
$jumlahdatavisitor5 = mysqli_num_rows ($datavisitor5);
//tanggal H-6
$datavisitor6 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-6");
$jumlahdatavisitor6 = mysqli_num_rows ($datavisitor6);
//tanggal H-7
$datavisitor7 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-7");
$jumlahdatavisitor7 = mysqli_num_rows ($datavisitor7);
//tanggal H-8
$datavisitor8 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-8");
$jumlahdatavisitor8 = mysqli_num_rows ($datavisitor8);
//tanggal H-9
$datavisitor9 = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tanggal = CURRENT_DATE()-9");
$jumlahdatavisitor9 = mysqli_num_rows ($datavisitor9);

//unique visitor
$uniquevisitor = mysqli_query ($koneksi, "SELECT * FROM kunjungan WHERE tujuan='membaca'");
$jumlahuniquevisitor = mysqli_num_rows ($uniquevisitor);

//menghitung bounce rate
$bouncerate = round ($jumlahuniquevisitor/$jumlahvisitor *100,2);
?>
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
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                <?php echo $jumlahvisitor; ?>  

                </h3>

                <p>Total Pengunjung</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
           <!--   <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
              <?php echo $bouncerate; ?><sup style="font-size: 20px">%</sup>  
              </h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> <?php echo $jumlahdatavisitor; ?>
                </h3>

                <p>Pengunjung Hari Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $jumlahuniquevisitor; ?></h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            <!--  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-book"></i>
                  Tujuan Kunjung
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="VisitorChart"  style="width:100%;max-width:600px"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <i class='fas fa-chart-bar'></i>
                  Grafik Kunjungan
                </h3>
                <div class="card-tools">
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                       <canvas id="DailyVisitorChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                   </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
           <!--   <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div> -->
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Membaca</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Diskusi</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Belajar</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div> 
            </div>
            <!-- /.card -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script>
var xValues = ["Membaca", "Pinjam/Kembali Buku", "Belajar", "Diskusi", "Lainnya..."];
var yValues = ["<?php
 echo $jumlahmembaca; ?>", "<?php echo $jumlahpeminjam; ?>", "<?php echo $jumlahbelajar; ?>", "<?php echo $jumlahdiskusi; ?>", "<?php echo $jumlahlainnya; ?>"];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("VisitorChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Grafik Kunjungan Pustakawan SMA Negeri 1 Sabang"
    }
  }
});
</script>
<!-- multiple line charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
var xValues = ["<?php $date = date ('d F Y', strtotime("-9 days")); echo $date; ?>","<?php $date = date ('d F Y', strtotime("-8 days")); echo $date; ?>","<?php $date = date ('d F Y', strtotime("-7 days")); echo $date; ?>","<?php $date = date ('d F Y', strtotime("-6 days")); echo $date; ?>","<?php $date = date ('d F Y', strtotime("-5 days")); echo $date; ?>","<?php $date = date ('d F Y', strtotime("-4 days")); echo $date; ?>","<?php $date = date ('d F Y', strtotime("-3 days")); echo $date; ?>","<?php $date = date ('d F Y', strtotime("-2 days")); echo $date; ?>","<?php $date = date ('d F Y', strtotime("-1 days")); echo $date; ?>","<?php $date = date ('d F Y'); echo $date; ?>"];

new Chart("DailyVisitorChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: ["<?php echo $jumlahdatavisitor9; ?>","<?php echo $jumlahdatavisitor8; ?>","<?php echo $jumlahdatavisitor7; ?>","<?php echo $jumlahdatavisitor6; ?>","<?php echo $jumlahdatavisitor5; ?>",
      "<?php echo $jumlahdatavisitor4; ?>","<?php echo $jumlahdatavisitor3; ?>","<?php echo $jumlahdatavisitor2; ?>","<?php echo $jumlahdatavisitor1; ?>","<?php echo $jumlahdatavisitor; ?>"],
      borderColor: "red",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
</script>

</body>
</html>

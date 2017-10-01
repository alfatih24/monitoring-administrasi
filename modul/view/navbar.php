<?php 
  // Hitung jurnal yang belum dikembalikan
  $belum_kembali    = $db->custom_query("SELECT id_log FROM log_jurnal WHERE waktu_kembali = '0000-00-00 00:00:00'");
  $jml_belum        = 0;
  foreach ($belum_kembali as $belum) {
    $jml_belum += 1;
  }
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./"><span class="glyphicon glyphicon-calendar"></span> Jurnal Dosen FKI</a>
    </div>
    <!-- <p class="navbar-text visible-lg">SOLOCUP 2016</p> -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="nav-ambilj"><a href="default.php">Ambil</a></li>
        <li id="nav-kembalikanj"><a title="<?php echo $jml_belum; ?> dosen belum mengembalikan jurnal" href="default.php?p=modul/jurnal/kembalikanjurnal">Kembalikan <span class="label label-danger"><?php echo $jml_belum; ?></span></a></li>
        <li id="nav-chart" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chart <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="default.php?p=admin/chart/chart_satu_tahun">Chart Satu Tahun</a></li>
            <li><a href="default.php?p=admin/chart/chart_multi_tahun">Chart Beberapa Tahun</a></li>
          </ul>
        </li>        
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li id="nav-home"><a href="default.php?p=modul/view/home"><span class="glyphicon glyphicon-home"></span> </a></li>
        <li id="nav-manajemen" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manajemen <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="default.php?p=admin/manajemen_alat/list_alat">Manajemen Peralatan</a></li>
            <li><a href="default.php?p=admin/manajemen_dosen/list_dosen">Manajemen Dosen</a></li>
            <li><a href="#">Manajemen Pengumuman</a></li>
          </ul>
        </li>
<!--         <li id="nav-bantuan" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bantuan <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#"> Tentang Sistem</a></li>
            <li><a href="#"> Laporkan Kesalahan Sistem</a></li>
            <li><a href="#"> Kontak Pengembang</a></li>
          </ul>
        </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
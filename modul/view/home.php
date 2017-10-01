<div class="jumbotron">
	<div align="right" class="container">
		<h1>Monitoring Jurnal Dosen</h1>
		<p>Fakultas Komunikasi dan Informatika UMS</p>
	</div> <!-- .container -->
</div> <!-- .jumbotron -->

<div class="container">
	<div class="row"> 
		<div class="container">
		<form method="post" class="form-horizontal" enctype="multipart/form-data" action="default.php?p=modul/jurnal/ambiljurnal">
			<h2><label for="inputCariDosen">Cari Nama Dosen</label></h2>
			<div class="input-group input-group-lg">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default" title="Scan QR Code"><span class="glyphicon glyphicon-qrcode"></span></button>
				</span>		
				<input type="search" name="cariDosen" id="inputCariDosen" class="form-control input-lg autocomplete-input" value="" required="required" title="Cari Nama Dosen" placeholder="Klik icon QR-Code untuk scan atau Masukkan nama dosen disini">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-primary"> Next <span class="glyphicon glyphicon-chevron-right"></span></button>
				</span>
			</div> <!-- input-group -->
		</form>
		</div> <!-- .container in -->
	</div> <!-- .row -->
</div> <!-- .container -->

<!-- Indicator Page -->
<script type="text/javascript">
	var namaDosen = [];

    <?php
      include_once "lib/config.php";
      $dosen      = "SELECT nama FROM dosen";
      $exec       = $db->custom_query($dosen);
      foreach ($exec as $nama) {
        $namadosen = $nama->nama;
        echo "namaDosen.push('".$namadosen."');";
      } // close foreach($exec)
    ?>
     $('#inputCariDosen').typeahead({
        local: namaDosen
      });	
	$("#nav-home").addClass("active");	
</script>

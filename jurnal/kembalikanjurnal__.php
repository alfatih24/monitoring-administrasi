<?php
	// Saat variable nilai terisi (Nilai Layanan Kami)
	if(isset($_POST[thumb_up])) // Jika Puas
	{
		$table 			= "log_jurnal";
		$dat 			= array("
								feedback"=>"Puas"
								);
		$id 			= "id_log";
		$val 			= $_POST[id_log];
		$kembalikan 	= $db->update($table,$dat,$id,$val);
		echo '
			<h1 class="page-header" align="center">Terima Kasih</h1>
			<meta http-equiv="refresh" content="1;url=default.php">
		';
		exit();
	}
	else if(isset($_POST[thumb_down])) // Jika Tidak Puas
	{
		$table 			= "log_jurnal";
		$dat 			= array("
								feedback"=>"Tidak"
								);
		$id 			= "id_log";
		$val 			= $_POST[id_log];
		$kembalikan 	= $db->update($table,$dat,$id,$val);
		echo '
			<h1 class="page-header" align="center">Terima Kasih</h1>
			<meta http-equiv="refresh" content="1;url=default.php">
		';		
		exit();	
	}
	else
	{ 
		// Skip 
	}	

	$id_log 		= $_GET[id_log];
	$namadosenFK	= $db->custom_query("SELECT id_dosenFK FROM log_jurnal WHERE id_log=$id_log");
	foreach ($namadosenFK as $dosenFK) {
		$namadosen 	= $db->custom_query("SELECT nama FROM dosen WHERE id_dosen=$dosenFK->id_dosenFK");
		foreach ($namadosen as $dosen) {
				$namadosen = $dosen->nama;
			}	
	}	

	// Atur waktu timezone
	date_default_timezone_set("Indonesia/Jakarta");
	$d 			= strtotime("+5 Hours");
	$sekarang	= date("Y-m-d H:i:s",$d);

	// Proses kembalikan
	$table 			= "log_jurnal";
	$dat 			= array("
							waktu_kembali"=>$sekarang
							);
	$id 			= "id_log";
	$val 			= $id_log;
	$kembalikan 	= $db->update($table,$dat,$id,$val);  
?>

<!-- Waktu Kembali jurnal telah di update, tampilkan halaman feedback -->
<div align="center" class="container">
	<h1>Jurnal Berhasil dikembalikan : <br><small>Nilai pelayanan kami menurut anda Bpk/Ibu <abbr title="<?php echo $namadosen; ?> Mengembalikan jurnal pada <?php echo $sekarang; ?> "><?php echo $namadosen; ?></abbr>, </small></h1>
	<div class="row thumb">
		<form method="post" action="default.php?p=jurnal/kembalikanjurnal__">
			<input type="hidden" name="id_log" value="<?php echo $id_log; ?>">
			<div class="col-md-5">
				<h1><button type="submit" name="thumb_up" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span></button></h1>
			</div>
			<div class="col-md-2">
				<h1 style="padding-top: 120px;">Atau</h1>
			</div>
			<div class="col-md-5">
				<h1><button type="submit" name="thumb_down" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-thumbs-down"></span></button></h1>
			</div>
		</form>
	</div> <!-- .thumb -->

	<h2><small id="hideMsg">Otomatis tertutup dalam <span>15</span> (detik) ...</small></h2>
	<meta http-equiv="refresh" content="15;url=default.php">
</div>

<script>
	var sec = 15
	var timer = setInterval(function() { 
	   $('#hideMsg span').text(sec--);
	   if (sec == -1) {
	      $('#hideMsg').fadeOut('fast');
	      clearInterval(timer);
	   } 
	}, 1000);	
</script>
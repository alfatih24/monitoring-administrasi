<?php
	$namadosenpost = $_POST[cariDosen];
	if(isset($namadosenpost))
	{
		$namadosen = $namadosenpost;
		$kodejurnal = $db->custom_query("SELECT id_dosen, kode_jurnal FROM dosen WHERE nama='$namadosen'");
		foreach ($kodejurnal as $daridb) {
			$kode_jurnal = $daridb->kode_jurnal;
			$iddosen 	= $daridb->id_dosen;
		}
	}
?>
<div class="container">
	<form role="form" method="post" class="form-horizontal margin-top" enctype="multipart/form-data" action="default.php?p=jurnal/ambiljurnal">
	<fieldset>

	<!-- Form Name -->
	<legend class="text-center">Ambil Jurnal Dosen</legend>

	<!-- ID DOSEN Hidden -->
	<input name="id_dosen" type="hidden" value="<?php echo $iddosen; ?>">

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="kode_jurnal">Kode Jurnal</label>
	  <div class="col-md-5">
		  <div class="input-group">
			<input id="kode_jurnal" name="kode_jurnal" type="text" placeholder="Kode QR dari Jurnal" class="form-control input-md" required="" value="<?php echo $kode_jurnal; ?>">
			<span class="input-group-btn">
				<button type="button" class="btn btn-default" title="Scan Ulang"> <span class="glyphicon glyphicon-qrcode"></span></button>
			</span>
		  </div> <!-- .input-group -->
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="nama_dosen">Nama Dosen</label>
	  <div class="col-md-5">
	  <input id="nama_dosen" name="nama_dosen" type="text" placeholder="Scan QR Code - Otomatis terisi" class="form-control input-md" required="" value="<?php echo $namadosen; ?>">

	  </div>
	</div>

	<!-- Multiple Checkboxes -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="list_barang">Peralatan yang dibawa</label>
	  <div class="col-md-4">
	  <?php 
	  	$alat 	= $db->fetch_all("all_alat");
	  	foreach ($alat as $alatdibawa) {
	  		$id_alat 	= $alatdibawa->id_alat;
	  		$nama_alat 	= $alatdibawa->nama_alat;
	  		if($nama_alat == "Jurnal")
	  		{
	  			$required = "required";
	  		}
	  		else 
	  		{
	  			$required = "";
	  		}
	  		echo '
			  <div class="checkbox">
			    <label for="list_barang-0">
			      <input type="checkbox" name="list_barang" onclick="displayResult(this.form)"  value="'.$id_alat.'" '.$required.'>
			      '.$nama_alat.'
			    </label>
				</div>
	  		';
	  	}

	  ?>
	  </div>
	</div>

	<!-- Hidden Fix Pinjem Barang -->
	<input type="hidden" name="selected_barang" id="selected_barang">

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="submit"></label>
	  <div class="col-md-4">
	    <button id="submit" name="ambil_alat" class="btn btn-lg btn-primary">Ambil Peralatan</button>
	  </div>
	</div>

	</fieldset>
	</form>


</div>
<!-- Indicator Page -->
<script type="text/javascript">
	$("document").ready(function(){
		$("#nav-ambilj").addClass("active");
	});	

	function displayResult(frm)
	{
	 var selected_barang="";
	    for (i = 0; i < frm.list_barang.length; i++)
	    { //menghitung jumlah panjang array
		  if (frm.list_barang[i].checked)
		  {
		   selected_barang += frm.list_barang[i].value +",";
		  }
	    }
	 //memunculkan data di input id result yg isinya select barang
	    document.getElementById("selected_barang").value=selected_barang;
	}
</script>

<?php
	if(isset($_POST[ambil_alat]))
	{		
		// Atur waktu timezone
		date_default_timezone_set("Indonesia/Jakarta");
		$d 			= strtotime("+5 Hours");
		$sekarang	= date("Y-m-d H:i:s",$d);
		$namadosen 	= $_POST[nama_dosen];
		$barang 	= $_POST[selected_barang];
		if(substr($barang, -1) == ",")
		{
			$barang = substr($barang, 0, -1);
		}		

		$table 				= "log_jurnal";
		$dat 				= array(
									"id_dosenFK" 	=> $_POST[id_dosen],
									"waktu_pinjam" 	=> $sekarang,
									"list_pinjam" 	=> $barang
									);
		$ambiljurnal 		= $db->insert($table, $dat);
		echo "<script>
				alert('Jurnal $namadosen - diambil pada $sekarang');
			</script>
			<meta http-equiv='refresh' content='0;url=default.php'>
			";
	}
?>
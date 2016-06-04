<div class="container">
	<form method="post" class="form-horizontal margin-top" enctype="multipart/form-data" action="default.php?p=jurnal/ambiljurnal">
	<fieldset>

	<!-- Form Name -->
	<legend class="text-center">Ambil Jurnal Dosen</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="kode_jurnal">Kode Jurnal</label>  
	  <div class="col-md-5">
		  <div class="input-group">
			<input id="kode_jurnal" name="kode_jurnal" type="text" placeholder="Kode QR dari Jurnal" class="form-control input-md" required="">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default" title="Scan Ulang"> <span class="glyphicon glyphicon-qrcode"></span></button>
			</span>	  
		  </div> <!-- .input-group -->
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="nama_dosen">Nama Dosen</label>  
	  <div class="col-md-5">
	  <input id="nama_dosen" name="nama_dosen" type="text" placeholder="Scan QR Code - Otomatis terisi" class="form-control input-md" required="">
	    
	  </div>
	</div>

	<!-- Multiple Checkboxes -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="list_barang">Peralatan yang dibawa</label>
	  <div class="col-md-4">
	  <div class="checkbox">
	    <label for="list_barang-0">
	      <input type="checkbox" name="list_barang" id="list_barang-0" value="1" checked="">
	      Jurnal
	    </label>
		</div>
	  <div class="checkbox">
	    <label for="list_barang-1">
	      <input type="checkbox" name="list_barang" id="list_barang-1" value="2">
	      Spidol
	    </label>
		</div>
	  <div class="checkbox">
	    <label for="list_barang-2">
	      <input type="checkbox" name="list_barang" id="list_barang-2" value="3">
	      Remote LCD
	    </label>
		</div>
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="submit"></label>
	  <div class="col-md-4">
	    <button id="submit" name="submit" class="btn btn-lg btn-primary">Ambil Peralatan</button>
	  </div>
	</div>

	</fieldset>
	</form>

	
</div>
<!-- Indicator Page -->
<script type="text/javascript">
	$("#nav-ambilj").addClass("active");
</script>
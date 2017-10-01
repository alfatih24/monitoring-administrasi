<?php 
	if(isset($isloginpage))
	{
		$navigasi = '<a href="../../default.php?p=modul/view/home">Halaman Depan</a>';
	}
	else
	{
		$navigasi = '<a href="./modul/login/login.php">Halaman Admin</a>';
	}
?>
 <div id="footer">
      <div class="container">
        <br>
        <p class="text-muted">&copy; 2016 Sistem Monitoring Jurnal Dosen FKI UMS - by 
          <a href="#" data-toggle="modal" data-target="#dev-albert">Albert</a> & 
          <a href="#"data-toggle="modal" data-target="#dev-intan">Intan</a>
        <span class="pull-right">Menuju :
          <?php echo $navigasi; ?>
        </span>
        </p>
      </div>
    </div>

<!-- modal pop up -->
<div class="modal fade" id="dev-albert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tentang Pengembang</h4>
      </div>
      <div class="modal-body">
        <div class="input-group">
          <span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
          <input type="text" class="form-control" value="Albert Septiawan - Informatika UMS '13" readonly>
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon"> <span class="glyphicon glyphicon-inbox"></span></span>
          <input type="text" class="form-control" value="albertseptiawan24@gmail.com" readonly>
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon"> <span class="glyphicon glyphicon-link"></span></span>
          <input type="text" class="form-control" value="http://www.github.com/axquired24" readonly>
        </div>
        <br>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- divider -->
<div class="modal fade" id="dev-intan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tentang Pengembang</h4>
      </div>
      <div class="modal-body">
        <div class="input-group">
          <span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
          <input type="text" class="form-control" value="Nur Intan Permata Hati - Informatika UMS '13" readonly>
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon"> <span class="glyphicon glyphicon-inbox"></span></span>
          <input type="text" class="form-control" value="nurint.permatahati@gmail.com" readonly>
        </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
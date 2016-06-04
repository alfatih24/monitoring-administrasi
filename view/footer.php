<?php 
	if(isset($isloginpage))
	{
		$navigasi = '<a href="../default.php?p=view/home">Halaman Depan</a>';
	}
	else
	{
		$navigasi = '<a href="./admin/login.php">Halaman Admin</a>';
	}
?>
 <div id="footer">
      <div class="container">
        <br>
        <p class="text-muted">&copy; 2016 Sistem Monitoring Jurnal Dosen FKI UMS
        <span class="pull-right">Menuju :
          <?php echo $navigasi; ?>
        </span>
        </p>
      </div>
    </div>
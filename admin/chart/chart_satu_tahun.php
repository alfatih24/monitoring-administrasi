<!-- JS Required by Chart -->
<script type="text/javascript" src="./admin/chart/js/fusioncharts.js"></script>
<script type="text/javascript" src="./admin/chart/js/themes/fusioncharts.theme.fint.js"></script>
<?php
	// Load Chart Atas
	if(isset($_POST[b_tahun]))
	{
		$b_tahun = $_POST[b_tahun]; // Tahun yang ditampilkan chart
	}
	else
	{
		$b_tahun 	= DATE('Y');
	}
	include 'inc_chart/chart-jumlah-tahun.php';
	include 'inc_chart/chart-kepuasan-tahun.php';
?>

<!-- Main Chart -->
<div class="container">
	<div class="row">
		<?php
			include 'fusioncharts.php';
		?>
		<h1 class="text-center page-header">Statistik Pelayanan Jurnal - Tahun <?php echo $b_tahun; ?></h1>
		<br><br>

		<div class="row"> <!-- Pada Tahun -->
		<form method="post" action="default.php?p=admin/chart/chart_satu_tahun" enctype="multipart/form-data">
			<div class="col-md-7"><h4 class="text-right">Statistik Dosen - Tahun :</h4></div>
			<div class="col-md-3">
				<select name="b_tahun" class="form-control" required="required">
	                <?php
	                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun FROM log_jurnal WHERE YEAR(waktu_kembali) NOT IN('.$b_tahun.') GROUP BY Tahun';
	                    $exe    = $db->custom_query($sql);
						echo '<option value="'.$b_tahun.'">'.$b_tahun.'</option>'; // Tahun yang tampil pertama
	                    foreach ($exe as $jml)
	                    {
	                        echo '
	                          <option value="'.$jml->Tahun.'">'.$jml->Tahun.'</option>
	                        ';
	                    } // Close Foreach 1
	                ?>
				</select>
			</div>
			<div class="col-md-2">
				<input type="submit" name="submit-tahun" class="btn btn-primary" value="Lihat Statistik">
				<!-- <button type="submit" name="submit-tahun" class="btn btn-primary">Lihat Statistik</button> -->
			</div>
		</form>
		</div>
		<br><br>
		<!-- Chart -->
		<div class="row">
			<div class="col-md-6">
				<div align="center" id="kepuasan-tahun">Loading Chart</div>
			</div>
			<div class="col-md-6">
				<div align="center" id="jumlah-tahun">Loading Chart</div>
			</div>
		</div>
		<hr>
		<br><br>
	</div> <!-- row -->
</div>	<!-- container -->

<script type="text/javascript">
    // <!-- Indicator Page -->
	$("#nav-chart").addClass("active");
</script>
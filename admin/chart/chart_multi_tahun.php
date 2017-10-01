<!-- JS Required by Chart -->
<script type="text/javascript" src="./admin/chart/js/fusioncharts.js"></script>
<script type="text/javascript" src="./admin/chart/js/themes/fusioncharts.theme.fint.js"></script>

<?php
	// Load Chart Bawah
	if(isset($_POST[c_tahun_1]) || isset($_POST[c_tahun_1]))
	{
		$c_tahun_1 = $_POST[c_tahun_1]; // Tahun dari
		$c_tahun_2 = $_POST[c_tahun_2]; // Tahun sampai		
	}
	else
	{
		$c_tahun_1 = DATE('Y') - 1; // Tahun dari
		$c_tahun_2 = DATE('Y'); // Tahun sampai
	}

	include 'inc_chart/chart-jumlah-antar-tahun.php';
	include 'inc_chart/chart-kepuasan-antar-tahun.php';
?>

<!-- Main Chart -->
<div class="container">
	<div class="row">
		<?php
			include 'fusioncharts.php';
		?>
		<h1 class="text-center page-header">Statistik Pelayanan Jurnal - Tahun <?php echo $c_tahun_1."-".$c_tahun_2; ?></h1>
		<br><br>
		<div class="row"> <!-- Pada Tahun - Tahun -->
			<form method="post" action="default.php?p=admin/chart/chart_multi_tahun">
			<div class="col-md-4"><h4 class="text-right">Statistik Dosen Pada Tahun - Tahun</h4></div>
			<div class="col-md-3">
				<select name="c_tahun_1" class="form-control" required="required">
	                <?php
	                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun FROM log_jurnal WHERE YEAR(waktu_kembali) NOT IN('.$c_tahun_1.') GROUP BY Tahun';
	                    $exe    = $db->custom_query($sql);
	                    echo '<option value="'.$c_tahun_1.'">'.$c_tahun_1.'</option>'; // Tahun yang tampil pertama
	                    foreach ($exe as $jml)
	                    {
	                        echo '
	                          <option value="'.$jml->Tahun.'">'.$jml->Tahun.'</option>
	                        ';
	                    } // Close Foreach 1
	                ?>
				</select>
			</div>
			<div class="col-md-3">
				<select name="c_tahun_2" class="form-control" required="required">
	                <?php
	                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun FROM log_jurnal WHERE YEAR(waktu_kembali) NOT IN('.$c_tahun_2.')  GROUP BY Tahun';
	                    $exe    = $db->custom_query($sql);
	                    echo '<option value="'.$c_tahun_2.'">'.$c_tahun_2.'</option>'; // Tahun yang tampil pertama
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
				<button type="submit" name="submit-antar-tahun" class="btn btn-primary">Lihat Statistik</button>
			</div>
			</form>
		</div>
		<br><br>
		<!-- Chart -->
		<div class="row">
			<div class="col-md-6">
				<div align="center" id="kepuasan-antar-tahun">Loading Chart</div>
			</div>
			<div class="col-md-6">
				<div align="center" id="jumlah-antar-tahun">Loading Chart</div>
			</div>
		</div>
		<hr>
		<br><br>
		<hr>
		<br><br>
	</div> <!-- row -->
</div>	<!-- container -->

<script type="text/javascript">
    // <!-- Indicator Page -->
	$("#nav-chart").addClass("active");
</script>
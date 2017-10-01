<!-- JS Required by Chart -->
<script type="text/javascript" src="./admin/chart/js/fusioncharts.js"></script>
<script type="text/javascript" src="./admin/chart/js/themes/fusioncharts.theme.fint.js"></script>


<!-- Main Chart -->
<div class="container">
	<div class="row">
		<?php
			include 'fusioncharts.php';
		?>
		<h1 class="text-center page-header">Statistik Pelayanan Jurnal</h1>
		<br><br>

		<div class="row"> <!-- Pada Tahun -->
		<form method="post" action="default.php?p=admin/chart/overall_chart">
			<div class="col-md-7"><h4 class="text-right">Statistik Dosen Pada Tahun</h4></div>
			<div class="col-md-3">
				<select name="b_tahun" class="form-control" required="required">
	                <?php
	                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun FROM log_jurnal GROUP BY Tahun';
	                    $exe    = $db->custom_query($sql);
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
				<button type="submit" name="submit-tahun" class="btn btn-primary">Lihat Statistik</button>
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

		<div class="row"> <!-- Pada Tahun - Tahun -->
			<form method="post" action="default.php?p=admin/chart/overall_chart">
			<div class="col-md-4"><h4 class="text-right">Statistik Dosen Pada Tahun - Tahun</h4></div>
			<div class="col-md-3">
				<select name="c_tahun_1" class="form-control" required="required">
	                <?php
	                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun FROM log_jurnal GROUP BY Tahun';
	                    $exe    = $db->custom_query($sql);
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
	                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun FROM log_jurnal GROUP BY Tahun';
	                    $exe    = $db->custom_query($sql);
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

		<?php
			// Load Chart Atas
			if(empty($b_tahun))
			{
				$b_tahun 	= DATE('Y');
			}
			else
			{
				$b_tahun = $_POST[b_tahun]; // Tahun yang ditampilkan chart
			}
			include 'inc_chart/chart-jumlah-tahun.php';
			include 'inc_chart/chart-kepuasan-tahun.php';
			
			// Load Chart Bawah
			if(empty($c_tahun_1) && empty($c_tahun_2))
			{
				$c_tahun_1 = DATE('Y') - 1; // Tahun dari
				$c_tahun_2 = DATE('Y'); // Tahun sampai
			}
			else
			{
				$c_tahun_1 = $_POST[c_tahun_1]; // Tahun dari
				$c_tahun_2 = $_POST[c_tahun_2]; // Tahun sampai
			}

			include 'inc_chart/chart-jumlah-antar-tahun.php';
			include 'inc_chart/chart-kepuasan-antar-tahun.php';
		?>
	</div> <!-- row -->
</div>	<!-- container -->

<script type="text/javascript">
    // <!-- Indicator Page -->
	$("#nav-chart").addClass("active");
</script>
<?php
	$tahun 	= 2016;
	$bulan 	= range(1,12);
	$bulan_teks 	= array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
?>
<script type="text/javascript">
	FusionCharts.ready(function(){
	      var revenueChart = new FusionCharts({
	        "type": "line",
	        "renderAt": "jumlah-antar-tahun",
	        "width": "500",
	        "height": "370",
	        "dataFormat": "json",
	        "dataSource": {
	          "chart": {
	              "caption": "Statistik Pelayanan Jurnal Dosen FKI",
	              "subCaption": "dari Tahun 2016 - Tahun 2017",
	              "xAxisName": "Bulan",
	              "yAxisName": "Jumlah Pelayanan",
	              "theme": "fint"
	           },
	          "data": [
				<?php
					$sql 	= 'SELECT YEAR(waktu_kembali) AS Tahun, COUNT(*) AS jml FROM log_jurnal GROUP BY Tahun';
					$exe 	= $db->custom_query($sql);
					foreach ($exe as $jml)
					{
						echo '
			              {
			                 "label": "'.$jml->Tahun.'",
			                 "value": "'.$jml->jml.'"
			              },
						';
					} // Close Foreach 1
				?>
	           ]
	        }
	    });
	    revenueChart.render();
	})
</script>
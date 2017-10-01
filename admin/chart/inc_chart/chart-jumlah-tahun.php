<?php
	$tahun 	= 2016;
	$bulan 	= range(1,12);
	$bulan_teks 	= array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
?>
<script type="text/javascript">
	FusionCharts.ready(function(){
	      var revenueChart = new FusionCharts({
	        "type": "line",
	        "renderAt": "jumlah-tahun",
	        "width": "500",
	        "height": "370",
	        "dataFormat": "json",
	        "dataSource": {
	          "chart": {
	              "caption": "Statistik Pelayanan Jurnal Dosen FKI",
	              "subCaption": "Tahun 2016",
	              "xAxisName": "Bulan",
	              "yAxisName": "Jumlah Pelayanan",
	              "theme": "fint"
	           },
	          "data": [
				<?php
					foreach ($bulan as $key => $value)
					{
						$sql 	= 'SELECT COUNT(*) AS jml FROM log_jurnal WHERE YEAR(waktu_kembali) = '.$tahun.' AND MONTH(waktu_kembali)='.$value;
						$exe 	= $db->custom_query($sql);
						foreach ($exe as $jml)
						{
							echo '
				              {
				                 "label": "'.$bulan_teks[$key].'",
				                 "value": "'.$jml->jml.'"
				              },
							';
						} // Close Foreach 1
					} // Close Foreach 2
				?>
	           ]
	        }
	    });
	    revenueChart.render();
	})
</script>
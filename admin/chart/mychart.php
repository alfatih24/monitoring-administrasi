<html>
	<head>
		<title>My first chart using FusionCharts Suite XT</title>
		<script type="text/javascript" src="js/fusioncharts.js"></script>
		<script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js"></script>
	</head>
	<body>
		<?php 
			include 'fusioncharts.php';
		?>
		<h1>Ini chart 1</h1>		
		<div align="center" id="chartContainer1">FusionCharts XT will load here!</div>
		<h1>Ini chart 2</h1>
		<div align="center" id="chartContainer2">FusionCharts XT will load here!</div>
		<h1>Ini chart 3</h1>
		<div align="center" id="chartContainer3">FusionCharts XT will load here!</div>
		<h1>Ini chart 4</h1>
		<div align="center" id="chartContainer4">FusionCharts XT will load here!</div>

		<?php 
			// Load semua chart hehe
			include 'inc_chart/chart1.php';
			include 'inc_chart/chart2.php';
			include 'inc_chart/chart3.php';
			include 'inc_chart/chart4.php';
		?>
	</body>
</html>
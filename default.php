<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistem Monitoring Jurnal Dosen | Fakultas Komunikasi dan Informatika</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/custom.css">
	<script type="text/javascript" src="./assets/js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		include 'view/navbar.php';
		require_once 'lib/config.php';

		// Konten
		$page = $_GET[p];
		if(empty($page))
		{
			include 'view/home.php';
		}
		else
		{
			include $page.".php";
		}
	?>
	<?php include 'view/footer.php'; ?>
</body>
</html>
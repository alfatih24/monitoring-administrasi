<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistem Monitoring Jurnal Dosen | Fakultas Komunikasi dan Informatika</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
    <!-- Datatable css -->
    <link href="assets/css/jquery.dataTables.css" rel="stylesheet">
    <link href="assets/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="assets/css/twitter-typeahead.css" rel="stylesheet">

    <!-- JS placed on top, prevent fail load on included page -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.12.0.min.js"></script>

    <!-- datatables js -->
    <script src="assets/js/dataTables.bootstrap.min.js"></script>    
    <script src="assets/js/jquery.dataTables.min.js"></script>
    
    <!-- BS-3 Type Ahead | AutoComplete -->
    <script src="assets/js/bootstrap3-typeahead.min.js"></script>    

    <!-- BS-3 JS -->
    <script src="assets/js/bootstrap.min.js"></script>

</head>
<body>
	<?php 		
		require_once 'lib/config.php';
		include 'view/navbar.php';

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
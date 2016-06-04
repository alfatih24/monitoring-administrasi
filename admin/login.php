<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login | Sistem Monitoring Jurnal Dosen | FKI UMS</title>
	<link rel="stylesheet" href="../../bs3_dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/custom.css">
	<script type="text/javascript" src="../../bs3_dist/js/jquery.js"></script>
	<script type="text/javascript" src="../../bs3_dist/js/bootstrap.min.js"></script>
	<style>
		body 
		{
			background-color: #F5F5F5;
		}
		hr
		{
			border-color: #DCDCDC;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="text-center">
				Jurnal Dosen FKI <br>
				<small>Halaman Administrator</small>
			</h2>
			<hr>
			<form method="post" action="login.php" class="form-horizontal">
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="usern"></label>
				  <div class="col-md-4">
					  <div class="input-group">
					  	<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
					  	<input id="usern" name="usern" type="text" placeholder="User login" class="form-control input-md" required="">
					  </div>
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passw"></label>
				  <div class="col-md-4">
					  <div class="input-group">
					   	<span class="input-group-addon"> <span class="glyphicon glyphicon-lock"></span></span>
					    <input id="passw" name="passw" type="password" placeholder="Password login" class="form-control input-md" required="">
					  </div>

				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-4">
				    <button id="submit" name="submit" class="btn btn-block btn-primary">Login</button>
				  </div>
				</div>
			</form>
		</div> <!-- .row -->
	</div>	<!-- .container -->

	<!-- Footer -->
	<?php
		$isloginpage = true;
		include "../view/footer.php";
	?>
</body>
</html>
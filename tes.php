<title>Just Test</title>
<?php 
	date_default_timezone_set("Indonesia/Jakarta");
	$d=strtotime("+5 Hours");

	$kata = "ahaasdasdsaha,";
	if(substr($kata, -1) == ",")
	{
		$kata = substr($kata, 0,-1);
	}
?>
<p>Waktu : <?php echo date("Y-m-d H:i:s",$d);?></p>
<p>Kata : <?php echo $kata; ?></p>
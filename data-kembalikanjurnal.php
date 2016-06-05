<?php
include_once "lib/config.php";

//kolom apa saja yang akan ditampilkan
$columns = array(
	'nama',
	'waktu_pinjam',
	'list_pinjam',
	);

//lakukan query data dari 3 table dengan inner join
	$query 		= $datatable->get_custom("SELECT l.id_log, d.id_dosen, d.nama, l.waktu_pinjam, l.list_pinjam FROM dosen d
											INNER JOIN log_jurnal l ON l.id_dosenFK=d.id_dosen
											WHERE l.waktu_kembali='0000-00-00 00:00:00'
											",$columns);

	//buat inisialisasi array data
	$data = array();
	$no   = 1;

	foreach ($query	as $value) {
		//array sementara data
		$ResultData = array();

		$ResultData[] = $no++;
		//masukan data ke array sesuai kolom table
		$ResultData[] = $value->nama;
		$ResultData[] = $value->waktu_pinjam; 

			// List Pinjam
			$list_pinjam 	= $db->custom_query("SELECT nama_alat FROM all_alat WHERE id_alat in ($value->list_pinjam)");
			$barang 		= array();
			foreach ($list_pinjam as $alat) {
				array_push($barang, $alat->nama_alat);
			}
			$barang 		= implode(", ", $barang);

		// Masukkan List pinjam ke tabel
		$ResultData[] 	= $barang;

		//bisa juga pake logic misal jika value tertentu maka outputnya

		//kita bisa buat tombol untuk keperluan edit, delete, dll,
		$kembalikan = "default.php?p=jurnal/kembalikanjurnal__&id_log=".$value->id_log;
		$crud_uri = array(
							"kembali" 		=> $kembalikan,
						);
		$ResultData[] = "
			<a title='Kembalikan Jurnal' href='".$crud_uri[kembali]."' class='btn btn-sm btn-primary'> <span class='glyphicon glyphicon-inbox'> </span> Kembalikan Jurnal</a>
		";

		//memasukan array ke variable $data

		$data[] = $ResultData;

	} // CLOSE foreach ($query	as $value)

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();

?>

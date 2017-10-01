<?php
include_once "lib/config.php";

//kolom apa saja yang akan ditampilkan
$columns = array(
	'id_alat',
	'nama_alat',
	);

//lakukan query data dari 3 table dengan inner join
	$query 		= $datatable->get_custom("SELECT * FROM all_alat",$columns);

	//buat inisialisasi array data
	$data = array();

	foreach ($query	as $value) {
		//array sementara data
		$ResultData = array();

		$ResultData[] = $value->id_alat;
		//masukan data ke array sesuai kolom table
		$ResultData[] = $value->nama_alat;

		//bisa juga pake logic misal jika value tertentu maka outputnya

		//kita bisa buat tombol untuk keperluan edit, delete, dll,
		$edit = "#".$value->id_alat;
		$hapus = "#".$value->id_alat;
		$crud_uri = array(
							"edit" 		=> $edit,
							"hapus" 	=> $hapus
						);
		$ResultData[] = "
			<a title='Ubah' href='".$crud_uri[edit]."' class='btn btn-sm btn-primary'> <span class='glyphicon glyphicon-pencil'> </span> </a>
			<a title='Hapus' href='".$crud_uri[hapus]."' class='btn btn-sm btn-danger'> <span class='glyphicon glyphicon-trash'> </span> </a>
		";

		//memasukan array ke variable $data

		$data[] = $ResultData;

	} // CLOSE foreach ($query	as $value)

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();

?>

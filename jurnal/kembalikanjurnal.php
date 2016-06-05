<?php
include_once "lib/config.php";
?>
<div class="container margin-top">
	<div class="row row-centered"> 
		<div class="container">		
		<h2 class="page-header">Dosen yang mengambil jurnal</h2>
        <div class="col-md-12">
            <table id="kembalikanjurnal" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                    	<th>No</th>
                        <th>Nama Dosen</th>
                        <th>Waktu Ambil</th>
                        <th>Alat yang dibawa</th>
                        <th>Aksi</th>
                </thead>
               <tbody>
               </tbody>
            </table>
        </div> <!-- col-md-12 -->		
		</div> <!-- .container in -->
	</div> <!-- .row -->
</div> <!-- .container -->


<script type="text/javascript">
    // <!-- Indicator Page -->
	$("#nav-kembalikanj").addClass("active");

	// Data table
    $("#kembalikanjurnal").dataTable
    ({
           'bProcessing': true,
            'bServerSide': true,

            //disable order dan searching pada tombol aksi
                 "columnDefs": [ {
              "targets": [0,3,4],
              "orderable": false,
              "searchable": false

            } ],
            "ajax":{
              url :"data-kembalikanjurnal.php",
            type: "post",  // method  , by default get
            //bisa kirim data ke server
            /*data: function ( d ) {

                      d.jurusan = "3223";
                  },*/
          error: function (xhr, error, thrown) {
            console.log(xhr);

            }
          },

    });	
</script>
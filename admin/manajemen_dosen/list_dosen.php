<?php
include_once "lib/config.php";
?>
<div class="container">
	<div class="row row-centered"> 
		<div class="container">		
		<h2 class="page-header">Dosen FKI - <?php echo date('Y'); ?></h2>
        <div class="col-md-12">
            <table id="listDosen" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                  <th>ID Dosen</th>
                  <th>Nama Dosen</th>
                  <th>Kontak</th>
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
	$("#nav-manajemen").addClass("active");

	// Data table
    $("#listDosen").dataTable
    ({
           'bProcessing': true,
            'bServerSide': true,

            //disable order dan searching pada tombol aksi
                 "columnDefs": [ {
              "targets": [2],
              "orderable": false,
              "searchable": false

            } ],
            "ajax":{
              url :"data-list_dosen.php",              
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
<?php require_once('includes/header.php'); ?>

<!-- BEGIN CONTAINER -->
<div class="page-container page-container-bg-solid">
	
	<!-- BEGIN CONTENT -->
	<div class="container-fluid container-lf-space page-content">
		<h3 class="page-title">
		Permohonan Izin Usaha Toko Swalayan (IUTS) <small>Dinas Perindustrian dan Perdagangan</small>
		</h3>

		<hr>

		//
	</div>
	<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->

<?php require_once('includes/footer.php'); ?>

<script type="text/javascript" src="scripts/dinkes/form-wizard-rs.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script type="text/javascript">
jQuery(document).ready(function() {    
	RKR.init();
	Layout.init();
	FormWizard.init();
	PerijinanFormTools.init();
});
</script>

<script>
  $('button[jAction=ambil-data]').click(
    function(){
      var nik=$('#nik').val();
      $.post("http://repo.stikom.edu/gioo/penduduk/nik/",{'nik':nik})
        .done(function( data ) {
          var jData = jQuery.parseJSON(data);

          var person_nama = jData[0].nama_lgkp;

          $('#person_nama').val(person_nama);
        });
    }
  );
</script>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>
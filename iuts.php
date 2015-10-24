<?php require_once('includes/header.php'); ?>

<!-- BEGIN CONTAINER -->
<div class="page-container page-container-bg-solid">

	<!-- BEGIN CONTENT -->
	<div class="container-fluid container-lf-space page-content">
		<h3 class="page-title">
		Permohonan Izin Usaha Toko Swalayan (IUTS) <small>Dinas Perindustrian dan Perdagangan</small>
		</h3>

		<hr>

		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
			<div class="col-md-12">
				<div class="portlet box blue" id="form_wizard_1">
					<div class="portlet-title">
						<div class="caption">
							Pengajuan Permohonan - <span class="step-title">
							Langkah 1 dari 5 </span>
						</div>
					</div>
					<div class="portlet-body form">
						<form action="#" class="form-horizontal" id="submit_form" method="POST">
							<div class="form-wizard">
								<div class="form-body">
									<ul class="nav nav-pills nav-justified steps">
										<li>
											<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">1 </span><br>
												<span class="desc">
													<i class="fa fa-check"></i> Pemohon
												</span>
											</a>
										</li>
										<li>
											<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">2 </span><br>
												<span class="desc">
													<i class="fa fa-check"></i> Profil Perusahaan
												</span>
											</a>
										</li>
										<li>
											<a href="#tab3" data-toggle="tab" class="step">
												<span class="number">3 </span><br>
												<span class="desc">
													<i class="fa fa-check"></i> Legalitas Perusahaan
												</span>
											</a>
										</li>
										<li>
											<a href="#tab4" data-toggle="tab" class="step">
												<span class="number">4 </span><br>
												<span class="desc">
													<i class="fa fa-check"></i> Upload Persyaratan
												</span>
											</a>
										</li>
										<li>
											<a href="#tab5" data-toggle="tab" class="step">
												<span class="number">5 </span><br>
												<span class="desc">
													<i class="fa fa-check"></i> Konfirmasi
												</span>
											</a>
										</li>
									</ul>
									<div id="bar" class="progress progress-striped" role="progressbar">
										<div class="progress-bar progress-bar-success">
										</div>
									</div>
									<div class="tab-content">

										<?php require_once('includes/perijinan/form_wizard-alert.php'); ?>

										<div class="tab-pane active" id="tab1">
											<h3 class="block">Identitas Pemohon</h3>

											<?php require('includes/perijinan/form_person.php'); ?>
										</div>

										<div class="tab-pane" id="tab2">
											<h3 class="block">Identitas Perusahaan</h3>

											<?php require('includes/perijinan/form_company_profile.php'); ?>
										</div>

										<div class="tab-pane" id="tab3">
											<h3 class="block">Legalitas Perusahaan</h3>

											//
										</div>

										<div class="tab-pane" id="tab4">
											<h3 class="block">Upload Persyaratan</h3>
											<div class="form-group">
												<div class="col-md-12">
													<h4>Rencana Kemitraan dengan UMKM</h4>

													<form action="includes/perijinan/upload.php" class="dropzone" id="my-dropzone"></form>
													<form action="includes/perijinan/upload.php" class="dropzone" id="my-dropzone"></form>
												</div>
											</div>
											<hr>
											<div class="form-group">
												<div class="col-md-12">
													<h4>Surat Pernyataan data yang disajikan adalah benar</h4>

													<form action="includes/perijinan/upload.php" class="dropzone" id="my-dropzone"></form>
												</div>
											</div>
											<hr>
											<div class="form-group">
												<div class="col-md-12">
													<h4>Surat Pernyataan kesanggupan melaksanakan dan mematuhi sesuai Peraturan Perundang-Undangan yang berlaku</h4>

													<form action="includes/perijinan/upload.php" class="dropzone" id="my-dropzone"></form>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="tab5">
											<h2 class="block text-center">Konfirmasi Pengajuan Permohonan</h2>

											<?php require_once('includes/perijinan/confirm_last_step.php'); ?>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<a href="javascript:;" class="btn default button-previous">
											<i class="m-icon-swapleft"></i> Back </a>
											<a href="javascript:;" class="btn blue button-next">
											Continue <i class="m-icon-swapright m-icon-white"></i>
											</a>
											<a href="javascript:;" class="btn green button-submit">
											Submit <i class="m-icon-swapright m-icon-white"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT-->
	</div>
	<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->

<?php require_once('includes/footer.php'); ?>

<script type="text/javascript" src="scripts/disperdagin/form-wizard-iuts.js"></script>
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
  $('button[jAction=ambil-penduduk]').click(
    function(){
      var nik=$('#nik').val();
      $.post("http://repo.stikom.edu/gioo/penduduk/nik/",{'nik':nik})
        .done(function( data ) {
          var jData = jQuery.parseJSON(data);

          var person_nama = jData[0].nama_lgkp;
		  var tgl_lahir = jData[0].tgl_lhr;
		  var jk = jData[0].jenis_kelamin;
		  var religion = jData[0].agama;
		  var alamat = jData[0].alamat;

//			console.log(religion);
//			console.log(alamat);
//			console.log(jk);

      $("input[name='person_nama']").val(person_nama);
	  $("input[name='person_tanggal_lahir']").val(tgl_lahir);

	  if(jk == 'PEREMPUAN') {
//				console.log("perempuan");
			$("#person_jenis_kelamin").val('w');
	  }
	  else {
//					console.log("laki laki");
			$("#person_jenis_kelamin").val('p');
	  }

	  $("input[name='person_agama']").val(religion);
	  $("input[name='person_alamat']").val(alamat);

        });
    }
  );

  $('button[jAction=ambil-perusahaan]').click(
    function(){
      var ntdp=$('#ntdp').val();
      $.post("http://repo.stikom.edu/gioo/perusahaan/ntdp/",{'ntdp':ntdp})
        .done(function( data ) {
          var jData = jQuery.parseJSON(data);

          var perusahaan_nama = jData[0].nama;
          var perusahaan_alamat = jData[0].alamat;
          var perusahaan_kota = jData[0].kota;
          var perusahaan_telp = jData[0].telp;
          var perusahaan_fax = jData[0].fax;
          var perusahaan_badan_usaha = jData[0].badan_usaha;

//				  console.log(religion);
//				  console.log(alamat);
//				  console.log(jk);

          $("input[name='perusahaan_nama']").val(perusahaan_nama);
          $("select[name='perusahaan_badan_usaha']").val(perusahaan_badan_usaha.toLowerCase());
//					console.log(perusahaan_badan_usaha.toLowerCase());
          $("input[name='perusahaan_no_telp']").val(perusahaan_telp);
          $("input[name='perusahaan_no_fax']").val(perusahaan_fax);
          $("input[name='perusahaan_jalan']").val(perusahaan_alamat);
          $("input[name='perusahaan_kabupaten_kota']").val(perusahaan_kota);
        });
    }
  );
</script>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>

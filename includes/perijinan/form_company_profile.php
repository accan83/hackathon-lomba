<div class="form-group">
	<label class="control-label col-md-3">Nama Perusahaan <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<div class="input-icon">
			<i class="fa fa-home"></i>
			<input type="text" class="form-control" name="perusahaan_nama" placeholder="Nama Perusahaan">
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Badan Usaha <span class="required">
	* </span>
	</label>
	<div class="col-md-2">
		<select class="form-control" name="perusahaan_badan_usaha">
			<option value=""></option>
			<option value="pt">PT</option>
			<option value="cv">CV</option>
		</select>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">No. Telp <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<div class="input-icon">
			<i class="fa fa-fax"></i>
			<input type="text" class="form-control" name="perusahaan_no_telp" placeholder="No. Telp Perusahaan">
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">No. Fax 
	</label>
	<div class="col-md-4">
		<div class="input-icon">
			<i class="fa fa-fax"></i>
			<input type="text" class="form-control" name="perusahaan_no_fax" placeholder="No. Fax Perusahaan">
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Email <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<div class="input-icon">
			<i class="fa fa-envelope"></i>
			<input type="text" class="form-control" name="perusahaan_email" placeholder="Email Perusahaan">
		</div>
	</div>
</div>
<br>
<div class="form-group">
	<label class="control-label col-md-3"><strong>Alamat Perusahaan</strong> </label>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Nama Jalan <span class="required">* </span>
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="perusahaan_jalan" placeholder="Nama Jalan">
		<span class="help-block">Dapat diisi / disertai dengan nama kompleks atau nama gedung (jika ada)</span>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">RT / RW
	</label>
	<div class="col-md-2">
		<input type="text" class="form-control" name="perusahaan_rt_rw" placeholder="RT / RW">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Kelurahan / Desa </label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="perusahaan_kelurahan_desa" placeholder="Kelurahan / Desa">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Kecamatan </label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="perusahaan_kecamatan" placeholder="Kecamatan">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Kabupaten / Kota </label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="perusahaan_kabupaten_kota" placeholder="Kabupaten / Kota">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Propinsi </label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="perusahaan_propinsi" placeholder="Propinsi">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Negara Asal</label>
	<div class="col-md-4">
		<select class="form-control daftar_negara" name="perusahaan_negara">
			<?php require('includes/perijinan/daftar_negara-select.php'); ?>
		</select>
	</div>
</div>
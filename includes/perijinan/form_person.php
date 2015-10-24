<div class="form-group">
	<label class="control-label col-md-3">NIK <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<div class="input-group">
			<input type="text" class="form-control" name="person_nik" placeholder="NIK" id="nik">
			<span class="input-group-btn">
				<button class="btn blue" type="button" jAction="ambil-penduduk">
					Cari <i class="fa fa-search"></i>
				</button>
			</span>
		</div>
		<div id="form_person_nik_error"></div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Nama Lengkap <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<div class="input-icon">
			<i class="fa fa-user"></i>
			<input type="text" class="form-control" name="person_nama" placeholder="Nama Lengkap" id="person_nama">
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Tempat Lahir <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="person_tempat_lahir" placeholder="Tempat Lahir">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Tanggal Lahir <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<div class="input-icon">
			<i class="fa fa-calendar"></i>
			<input type="text" class="form-control date-picker" name="person_tanggal_lahir" placeholder="Tanggal Lahir">
			<span class="help-block">Format tanggal: dd/mm/yyyy - contoh: 30/12/1990</span>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Jenis Kelamin <span class="required">
	* </span>
	</label>
	<div class="col-md-2">
		<select class="form-control" name="person_jenis_kelamin" id="person_jenis_kelamin">
			<option value=""></option>
			<option value="p">Pria</option>
			<option value="w">Wanita</option>
		</select>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Agama <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="person_agama" placeholder="Agama">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Alamat <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="person_alamat" placeholder="Alamat">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Kode Pos <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control mask-kode-pos" name="person_kode_pos" placeholder="Kode Pos">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">No. Telp <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<div class="input-icon">
			<i class="fa fa-fax"></i>
			<input type="text" class="form-control" name="person_telp" placeholder="No. Telp/Fax">
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-3">Email <span class="required">
	* </span>
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="person_email" placeholder="Email">
	</div>
</div>

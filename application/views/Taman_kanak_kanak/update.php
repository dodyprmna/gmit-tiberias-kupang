<input type="hidden" name="id" id="id" value="<?= $registrasi->id_registrasi?>">
<div class="col-md-4">
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $registrasi->nama_lengkap?>" placeholder="Nama Lengkap" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>NIK</label>
		<input class="form-control" type="number" name="nik" id="nik" placeholder="NIK" value="<?= $registrasi->nik?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control select22" data-placeholder="Pilih Jenis Kelamin" required>
			<option value=""></option>
			<option value="1" <?= ($registrasi->jenis_kelamin == 1) ? 'selected' : ''?>>Laki-Laki</option>
			<option value="2" <?= ($registrasi->jenis_kelamin == 2) ? 'selected' : ''?>>Perempuan</option>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $registrasi->tempat_lahir?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $registrasi->tanggal_lahir?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Alamat Lengkap</label>
		<textarea class="form-control" name="alamat" id="alamat" cols="3" placeholder="Alamat Lengkap" required><?= $registrasi->alamat?></textarea>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Agama</label>
		<input class="form-control" type="text" name="agama" id="agama" placeholder="Agama" value="<?= $registrasi->agama?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Kewarganegaraan</label>
		<select name="kewarganegaraan" class="form-control select22" required data-placeholder="Pilih Kewarganegaraan">
			<option value=""></option>
			<option value="1" <?= ($registrasi->kewarganegaraan == 1) ? 'selected' : ''?>>WNI</option>
			<option value="2" <?= ($registrasi->kewarganegaraan == 2) ? 'selected' : ''?>>WNA</option>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tinggal Bersama</label>
		<input class="form-control" type="text" name="tinggal_bersama" id="tinggal_bersama" value="<?= $registrasi->tinggal_bersama?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Anak Ke</label>
		<input class="form-control" type="number" name="anak_ke" id="anak_ke" placeholder="Anak ke" value="<?= $registrasi->anak_ke?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Usia</label>
		<input class="form-control" type="number" name="usia" id="usia" placeholder="Usia" value="<?= $registrasi->usia?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Telepon</label>
		<input class="form-control" type="text" name="telepon" id="telepon" placeholder="Telepon" value="<?= $registrasi->telepon?>" required>
	</div>
</div>
<script>
$(document).ready(function(){
	$('.select22').select2({
		theme: 'bootstrap4',
		width : '100%',
	});
})
</script>


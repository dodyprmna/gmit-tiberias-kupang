<input type="hidden" name="id" id="id" value="<?= $jemaat->id_jemaat?>">
<div class="col-md-4">
	<div class="form-group">
		<label>Nama Lengkap*</label>
		<input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $jemaat->nama?>" placeholder="Nama Lengkap" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>NIK*</label>
		<input class="form-control" type="number" name="nik" id="nik" placeholder="NIK" value="<?= $jemaat->nik?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Alamat Lengkap*</label>
		<textarea class="form-control" name="alamat" id="alamat" cols="3" placeholder="Alamat Lengkap" required><?= $jemaat->alamat?></textarea>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Email*</label>
		<input class="form-control" type="email" name="email" id="email" placeholder="Email" value="<?= $jemaat->email?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Rayon*</label>
		<select name="rayon" class="form-control select22" data-placeholder="Pilih Rayon" required>
			<option value=""></option>
			<?php for($i = 1; $i <= 14; $i++):?>
				<option value="<?= $i?>" <?= ($i == $jemaat->rayon) ? 'selected' : ''?>><?= $i?></option>
			<?php endfor;?>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Gereja Sebelumnya*</label>
		<input class="form-control" type="text" name="gereja" id="gereja" placeholder="Gereja Sebelumnya" value="<?= $jemaat->gereja_sebelumnya?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Role Akses*</label>
		<select name="role" class="form-control select22" data-placeholder="Pilih Role Akses" required>
			<option value=""></option>
			<option value="1" <?= ($jemaat->role == 1) ? 'selected' : ''?>>Admin</option>
			<option value="2" <?= ($jemaat->role == 2) ? 'selected' : ''?>>Jemaat</option>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Status*</label>
		<select name="status" class="form-control select22" data-placeholder="Pilih Status" required>
			<option value=""></option>
			<option value="0" <?= ($jemaat->status == 0) ? 'selected' : ''?>>Non Aktif</option>
			<option value="1" <?= ($jemaat->status == 1) ? 'selected' : ''?>>Aktif</option>
		</select>
	</div>
</div>

<script>
$(document).ready(function(){
	$('.select22').select2({
		theme: 'bootstrap4',
		width : '100%',
	});
});
</script>


<input type="hidden" name="id" id="id" value="<?= $baptisan->id_baptisan?>">
<div class="col-md-4">
	<div class="form-group">
		<label>Nama Lengkap*</label>
		<input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?= $baptisan->nama?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tempat Lahir*</label>
		<input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $baptisan->tempat_lahir?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tanggal Lahir*</label>
		<input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $baptisan->tanggal_lahir?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Alamat Lengkap*</label>
		<textarea class="form-control" name="alamat" id="alamat" cols="3" placeholder="Alamat Lengkap" required><?= $baptisan->alamat?></textarea>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Nama Ayah*</label>
		<input class="form-control" type="text" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" value="<?= $baptisan->nama_ayah?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Nama Ibu*</label>
		<input class="form-control" type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" value="<?= $baptisan->nama_ibu?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tanggal Baptis*</label>
		<input class="form-control" type="date" name="tanggal_baptis" id="tanggal_baptis" value="<?= $baptisan->tanggal_baptis?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tempat Baptis*</label>
		<textarea class="form-control" name="tempat_baptis" id="tempat_baptis" cols="3" placeholder="Tempat Baptis" required><?= $baptisan->tempat_baptis?></textarea>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Oleh*</label>
		<input class="form-control" type="text" name="oleh" id="oleh" placeholder="Oleh" value="<?= $baptisan->oleh?>" required>
	</div>
</div>


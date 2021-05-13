<input type="hidden" name="id" value="<?= $gereja->id_informasi_gereja?>">
<div class="col-6">
	<div class="form-group">
		<label>Nama Gereja</label>
		<input type="text" class="form-control" name="nama_gereja" placeholder="Nama Gereja" value="<?= $gereja->nama_gereja?>" required>
	</div>
</div>
<div class="col-6">
	<div class="form-group">
		<label>Alamat Gereja</label>
		<textarea name="alamat_gereja" class="form-control" cols="3" placeholder="Alamat Gereja" required><?= $gereja->alamat_gereja?></textarea>
	</div>
</div>
<div class="col-6">
	<div class="form-group">
		<label>Tentang Kami</label>
		<textarea name="tentang_kami" class="form-control" cols="3" placeholder="Tentang Kami" required><?= $gereja->tentang_kami?></textarea>
	</div>
</div>
<div class="col-6">
	<div class="form-group">
		<label>Pelayanan Gereja</label>
		<textarea name="pelayanan_gereja" class="form-control" cols="3" placeholder="Pelayanan Gereja" required><?= $gereja->pelayanan_gereja?></textarea>
	</div>
</div>
<div class="col-6">
	<div class="form-group">
		<label>Kontak</label>
		<textarea name="kontak" class="form-control" cols="3" placeholder="Kontak" required><?= $gereja->kontak?></textarea>
	</div>
</div>
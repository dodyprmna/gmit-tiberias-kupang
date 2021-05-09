<input type="hidden" name="id" id="id" value="<?= $pengumuman->id_pengumuman?>">
<div class="col-md-6">
	<div class="form-group">
		<label>Judul Pengumuman</label>
		<input class="form-control" type="text" name="judul_pengumuman" id="judul_pengumuman" value="<?= $pengumuman->judul?>" placeholder="Judul pengumuman" required>
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Isi Pengumuman</label>
		<textarea class="form-control" name="isi_pengumuman" id="isi_pengumuman" rows="3"><?= $pengumuman->isi?></textarea>
	</div>
</div>
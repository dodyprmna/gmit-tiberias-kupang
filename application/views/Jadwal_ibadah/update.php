<input type="hidden" name="id" id="id" value="<?= $jadwal->id_jadwal?>">
<div class="col-md-4">
	<div class="form-group">
		<label>Nama Ibadah</label>
		<input class="form-control" type="text" name="nama_ibadah" id="nama_ibadah" value="<?= $jadwal->nama_ibadah?>" placeholder="Nama Ibadah" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Jenis Ibadah</label>
		<select class="select2" id="jenis_ibadah" name="jenis_ibadah" onchange="cek_jenis_ibadah()" data-placeholder="Pilih jenis ibadah" required>
			<option value=""></option>
			<option value="0" <?= ($jadwal->jenis_ibadah == 0) ? 'selected' : ''?>>Kebaktian Utama Minggu</option>
			<option value="1" <?= ($jadwal->jenis_ibadah == 1) ? 'selected' : ''?>>Ibadah Kategorial</option>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Kategori</label>
		<select class="select2" id="kategori" name="kategori" data-placeholder="Pilih kategori ibadah" <?= ($jadwal->jenis_ibadah == 0) ? 'disabled' : ''?>>
			<option value=""></option>
			<?php foreach($kategori as $row):?>
				<option value="<?= $row->id_kategori?>" <?= ($row->id_kategori == $jadwal->id_kategori) ? 'selected' : ''?>><?= $row->nama_kategori?></option>
			<?php endforeach;?>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tanggal</label>
		<input class="form-control" type="date" name="tanggal" id="tanggal" value="<?= $jadwal->tanggal?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Jam Mulai</label>
		<input class="form-control" type="time" name="jam_mulai" id="jam_mulai" value="<?= $jadwal->jam_mulai?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Jam Selesai</label>
		<input class="form-control" type="time" name="jam_selesai" id="jam_selesai" value="<?= $jadwal->jam_selesai?>" required>
	</div>
</div>

<script>
	$('.select2').select2({
		theme: 'bootstrap4',
		width : '100%',
	});
</script>
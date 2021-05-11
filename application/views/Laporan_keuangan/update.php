<input type="hidden" name="id" id="id" value="<?= $laporan->id_laporan?>">
<input type="hidden" name="kategori" id="kategori" value="<?= $laporan->kategori?>">
<div class="col-md-4">
	<div class="form-group">
		<label>Jenis Transaksi*</label>
		<select class="form-control select22" data-placeholder="Pilih Jenis Transaksi" onchange="get_kategori()" name="jenis_transaksi_update" id="jenis_transaksi_update" required>
			<option value=""></option>
			<option value="0" <?= ($laporan->jenis_transaksi == 0) ? "selected" : ""?>>Pemasukan</option>
			<option value="1" <?= ($laporan->jenis_transaksi == 1) ? "selected" : ""?>>Pengeluaran</option>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Kategori*</label>
		<select class="form-control select22" name="kategori_update" id="kategori_update" data-placeholder="Pilih Kategori" required>
			<option value=""></option>
			<?php if($laporan->jenis_transaksi == 0):?>
				<option value='1' <?= ($laporan->kategori == 1) ? "selected" : ""?>>Kolekta</option>
				<option value='2' <?= ($laporan->kategori == 2) ? "selected" : ""?>>Perpuluhan</option>
				<option value='3' <?= ($laporan->kategori == 3) ? "selected" : ""?>>Nazar</option>
				<option value='4' <?= ($laporan->kategori == 4) ? "selected" : ""?>>Lain-lain</option>
			<?php else:?>
				<option value='4' <?= ($laporan->kategori == 4) ? "selected" : ""?>>Lain-lain</option>
			<?php endif;?>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Tanggal*</label>
		<input type="date" class="form-control" name="tanggal" value="<?= $laporan->tanggal?>" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Jumlah*</label>
		<input type="number" min="1" class="form-control" name="jumlah" value="<?= $laporan->jumlah?>" placeholder="Jumlah" required>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Keterangan</label>
		<textarea class="form-control" name="keterangan" cols="3" rows="3" placeholder="Keterangan"><?= $laporan->keterangan?></textarea>
	</div>
</div>

<script>
$(document).ready(function(){
	$('.select22').select2({
		theme: 'bootstrap4',
		width : '100%',
	});

	$(document).on("change", "#jenis_transaksi_update", function () {
		var id = $("#jenis_transaksi_update").val();	
		var kategori = $("#kategori").val();
		var html ="";

		if (id == 0) {
			html +=
			"<option value='1'>Kolekta</option><option value='2'>Perpuluhan</option><option value='3'>Nazar</option><option value='4'>Lain-lain</option>";
		} else {
			html += "<option value='4'>Lain-lain</option>";
		}
		$("#kategori_update").html(html);
		$("#kategori_update").val(kategori).trigger("change");
	});
})
</script>
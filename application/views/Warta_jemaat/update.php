<input type="hidden" name="id" id="id" value="<?= $warta->id_warta?>">
<div class="col-md-6">
	<div class="form-group">
		<label>Jadwal Ibadah</label>
		<select class="form-control select22" name="id_jadwal_ibadah" id="id_jadwal_ibadah" data-placeholder="Pilih jadwal ibadah" required>
			<option value=""></option>
			<?php foreach($jadwal as $row):?>
				<option value="<?= $row->id_jadwal?>" <?= ($row->id_jadwal == $warta->id_jadwal) ? "selected" : ""?>><?= $row->nama_ibadah." - ".date("d M Y", strtotime($row->tanggal))?></option>
			<?php endforeach;?>
		</select>	
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>File</label>
		<input class="form-control" type="file" name="file" accept=".pdf">
	</div>
</div>
<?php if(!empty($warta->file_warta)):?>
	<div class="col-md-12">
		<div class="form-group">
			<button class="btn btn-info btn-preview" style="width: 100%;" type="button" data-toggle="modal" data-target="#modal_preview" data-file="<?= $warta->file_warta ?>"><i class="fa fa-file-alt"></i> <?= $warta->file_warta?></button>
		</div>
	</div>
<?php endif;?>

<script>
	$('.select2').select22({
		theme: 'bootstrap4',
		width : '100%',
	});
</script>
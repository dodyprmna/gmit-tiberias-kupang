<input type="hidden" name="id" id="id" value="<?= $berita->id_berita?>">
<div class="col-md-6">
	<div class="form-group">
		<label>Judul berita*</label>
		<input class="form-control" type="text" name="judul_berita" id="judul_berita" value="<?= $berita->judul_berita?>" placeholder="Judul berita" required>
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Tambah File</label>
		<input class="form-control" type="file" multiple name="foto[]" id="foto">
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Isi berita*</label>
		<textarea class="form-control" name="isi_berita" id="isi_berita" rows="3"><?= $berita->isi_berita?></textarea>
	</div>
</div>
<?php if($file):?>
<div class="col-md-12">
	<div class="form-group">
		<label>File</label>
		<div class="row">
			<?php foreach($file as $row):?>
				<div class="col-4">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('uploads/berita/'.$row->nama_file)?>" alt="Card image cap">
						<button type="button" class="btn btn-danger btn-sm btn-delete-file"  data-idberita="<?= $row->id_berita?>" data-id="<?= $row->id_file?>" data-filename=<?= $row->nama_file?>>Hapus</button>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<?php endif;?>
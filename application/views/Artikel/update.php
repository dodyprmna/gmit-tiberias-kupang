<input type="hidden" name="id" id="id" value="<?= $artikel->id_artikel?>">
<input type="hidden" name="judul_lama" id="judul_lama" value="<?= $artikel->judul_artikel?>">
<input type="hidden" name="isi_lama" id="isi_lama" value="<?= $artikel->isi_artikel?>">
<div class="col-md-6">
	<div class="form-group">
		<label>Judul Artikel*</label>
		<input class="form-control" type="text" name="judul_artikel" id="judul_artikel" value="<?= $artikel->judul_artikel?>" placeholder="Judul artikel" required>
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
		<label>Isi Artikel*</label>
		<textarea class="form-control" name="isi_artikel" id="isi_artikel" rows="3"><?= $artikel->isi_artikel?></textarea>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>File</label>
		<div class="row">
			<?php foreach($file as $row):?>
				<div class="col-4">
					<div class="card" style="width: 12rem;">
						<img class="card-img-top" src="<?= base_url('uploads/artikel/'.$row->nama_file)?>" alt="Card image cap">
						<button type="button" class="btn btn-danger btn-delete-file"  data-idartikel="<?= $row->id_artikel?>" data-id="<?= $row->id_file?>" data-filename=<?= $row->nama_file?>>Hapus</button>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
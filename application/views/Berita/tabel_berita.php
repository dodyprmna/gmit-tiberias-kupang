<div class="table-responsive">
	<table class="table table-bordered" id="tabel_berita">
		<thead>
			<tr>
				<th width="5%"><center>No</center></th>
				<th widtth="10%"><center>Judul</center></th>
				<th><center>Isi Berita</center></th>
				<th width="10%"><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($berita as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= $row->judul_berita ?></td>
					<td><?= $row->isi_berita?></td><td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_berita ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_berita ?>" data-berita="<?= $row->judul_berita?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
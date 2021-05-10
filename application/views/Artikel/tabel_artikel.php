<div class="table-responsive">
	<table class="table table-bordered" id="tabel_artikel">
		<thead>
			<tr>
				<th width="5%"><center>No</center></th>
				<th widtth="10%"><center>Judul</center></th>
				<th><center>Isi Artikel</center></th>
				<th width="10%"><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($artikel as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= $row->judul_artikel ?></td>
					<td><?= $row->isi_artikel?></td><td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_artikel ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_artikel ?>" data-artikel="<?= $row->judul_artikel?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
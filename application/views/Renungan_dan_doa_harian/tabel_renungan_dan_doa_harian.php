<div class="table-responsive">
	<table class="table table-bordered" id="tabel_renungan">
		<thead>
			<tr>
				<th width="5%"><center>No</center></th>
				<th><center>Isi</center></th>
				<th width="10%"><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($renungan_dan_doa as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= $row->isi?></td><td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_renungan_dan_doa ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_renungan_dan_doa ?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
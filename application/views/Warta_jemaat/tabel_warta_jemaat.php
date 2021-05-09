<div class="table-responsive">
	<table class="table table-bordered" id="tabel_warta_jemaat">
		<thead>
			<tr>
				<th width="5%"><center>No</center></th>
				<th><center>Nama Ibadah</center></th>
				<th width="5%"><center>File</center></th>
				<th width="10%"><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($warta_jemaat as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= $row->nama_ibadah ?></td>
					<td>
						<?php if(!empty($row->file_warta)):?>
							<button class="btn btn-info btn-sm btn-preview" data-toggle="modal" data-target="#modal_preview" data-file="<?= $row->file_warta ?>"><i class="fa fa-file-alt"></i></button>
						<?php else:?>
							<span class="badge badge-danger badge-sm">Empty</span>
						<?php endif;?>
					</td>
					<td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_warta ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_warta ?>" data-ibadah="<?= $row->nama_ibadah?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
<div class="table-responsive">
	<table class="table table-bordered" id="tabel_jemaat">
		<thead>
			<tr>
				<th><center>No</center></th>
				<th><center>Nama</center></th>
				<th><center>Alamat</center></th>
				<th><center>Status</center></th>
				<th><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($jemaat as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= $row->nama ?></td>
					<td><?= $row->alamat?></td>
					<td align="center">
					<?php if($row->status == 1):?>
						<span class="badge badge-success badge-small">Aktif</span>
					<?php else:?>
						<span class="badge badge-danger badge-small">Tidak Aktif</span>
					<?php endif;?>
					</td>
					<td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_jemaat ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_jemaat ?>" data-nama="<?= $row->nama?>"><i class="fa fa-trash"></i></button>
						<?php if($row->status == 0):?>
							<button class="btn btn-info btn-sm btn-aktivasi" data-id="<?= $row->id_jemaat ?>"><i class="fa fa-check"></i> Aktivasi</button>
						<?php endif;?>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
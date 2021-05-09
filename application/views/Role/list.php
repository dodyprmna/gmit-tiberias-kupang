<table class="table table-bordered" id="tabel_role">
	<thead>
		<tr>
			<th><center>No</center></th>
			<th><center>Nama Role</center></th>
			<th><center>Status Role</center></th>
			<th><center>Aksi</center></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; foreach($role as $row):?>
			<tr>
				<td align="center"><?= $no++?></td>
				<td><?= $row->nama_role?></td>
				<td align="center">
					<?php if($row->status_role == '0'):?>
						<span class="badge badge-danger">Tidak Aktif</span>
					<?php else:?>
						<span class="badge badge-success">Aktif</span>
					<?php endif;?>
				</td>
				<td align="center"><button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_role?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>
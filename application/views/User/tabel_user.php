<table class="table table-bordered" id="tabel_user">
	<thead>
		<tr>
			<th><center>No</center></th>
			<th><center>Nama User</center></th>
			<th><center>Username</center></th>
			<th><center>Role</center></th>
			<th><center>Status User</center></th>
			<th><center>Aksi</center></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; foreach($user as $row):?>
			<tr>
				<td align="center"><?= $no++?></td>
				<td><?= $row->nama ?></td>
				<td><?= $row->username ?></td>
				<td>
					<?= ($row->jenis_user == 1) ? 'Admin' : 'Member'?>
				</td>
				<td align="center">
					<?php if($row->status_user == '0'):?>
						<span class="badge badge-danger">Tidak Aktif</span>
					<?php else:?>
						<span class="badge badge-success">Aktif</span>
					<?php endif;?>
				</td>
				<td align="center">
					<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_user ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
					<button class="btn btn-primary btn-sm btn-delete" data-id="<?= $row->id_user ?>" ><i class="fa fa-trash"></i></button> 
					<button class="btn btn-warning btn-sm btn-resetpassword" data-id="<?= $row->id_user?>" type="button">Reset Password</button>
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>
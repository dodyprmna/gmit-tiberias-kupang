<div class="table-responsive">
	<table class="table table-bordered" id="tabel_registrasi">
		<thead>
			<tr>
				<th><center>No</center></th>
				<th><center>Nama Lengkap</center></th>
				<th><center>NIK</center></th>
				<th><center>Tempat Tanggal Lahir</center></th>
				<th><center>Alamat</center></th>
				<th><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($registrasi as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= $row->nama_lengkap ?></td>
					<td><?= $row->nik ?></td>
					<td><?= $row->tempat_lahir.", ".date("d M Y",strtotime($row->tanggal_lahir))?></td>
					<td><?= $row->alamat?></td>
					<td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_registrasi ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_registrasi ?>" data-nama="<?= $row->nama_lengkap?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
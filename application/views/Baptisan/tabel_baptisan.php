<div class="table-responsive">
	<table class="table table-bordered" id="tabel_baptisan">
		<thead>
			<tr>
				<th><center>No</center></th>
				<th><center>Nama Lengkap</center></th>
				<th><center>Alamat</center></th>
				<th><center>Tempat Tanggal Lahir</center></th>
				<th><center>Tanggal Baptis</center></th>
				<th><center>Tempat Baptis</center></th>
				<th><center>Oleh</center></th>
				<th><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($baptisan as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= $row->nama ?></td>
					<td><?= $row->alamat?></td>
					<td><?= $row->tempat_lahir.", ".date("d M Y",strtotime($row->tanggal_lahir))?></td>
					<td><?= date("d M Y",strtotime($row->tanggal_baptis))?></td>
					<td><?= $row->tempat_baptis?></td>
					<td><?= $row->oleh?></td>
					<td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_baptisan ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_baptisan ?>" data-nama="<?= $row->nama?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
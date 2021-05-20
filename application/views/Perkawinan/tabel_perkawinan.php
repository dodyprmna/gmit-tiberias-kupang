<div class="table-responsive">
	<table class="table table-bordered" id="tabel_perkawinan">
		<thead>
			<tr>
				<th><center>No</center></th>
				<th><center>Nama Calon Lelaki</center></th>
				<th><center>Nama Calon Perempuan</center></th>
				<th><center>Tanggal Pemberkatan</center></th>
				<th><center>Gereja</center></th>
				<th><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($perkawinan as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= $row->nama_calon_suami?></td>
					<td><?= $row->nama_calon_istri?></td>
					<td><?= date("d M Y",strtotime($row->tanggal_pemberkatan))?></td>
					<td><?= $row->gereja?></td>
					<td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_perkawinan ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_perkawinan ?>" data-nama="<?= $row->nama_calon_suami?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
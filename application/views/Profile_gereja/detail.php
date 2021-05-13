<div class="row">
	<div class="col-12" style="text-align: center;">
		<i class="fa fa-church fa-7x"></i>
	</div>
</div><hr>
<div class="row">
	<div class="col-12">
		<table class="table table-hover">
			<tbody>
				<tr>
					<th style="width: 20%;">Nama Gereja</th>
					<th style="width: 1%;">:</th>
					<td><?= (!empty($gereja) ? $gereja->nama_gereja : "")?></td>
				</tr>
				<tr>
					<th style="width: 20%;">Alamat Gereja</th>
					<th style="width: 1%;">:</th>
					<td><?= (!empty($gereja) ? nl2br($gereja->alamat_gereja) : "")?></td>
				</tr>
				<tr>
					<th style="width: 20%;">Tentang Kami</th>
					<th style="width: 1%;">:</th>
					<td><?= (!empty($gereja) ? nl2br($gereja->tentang_kami) : "")?></td>
				</tr>
				<tr>
					<th style="width: 20%;">Pelayanan Kami</th>
					<th style="width: 1%;">:</th>
					<td><?= (!empty($gereja) ? nl2br($gereja->pelayanan_gereja) : "")?></td>
				</tr>
				<tr>
					<th style="width: 20%;">Kontak</th>
					<th style="width: 1%;">:</th>
					<td><?= (!empty($gereja) ? nl2br($gereja->kontak) : "")?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<?php if(!empty($gereja)):?>
			<button class="btn btn-primary btn-update" style="width: 100%;" data-toggle="modal" data-target="#modal_update" data-id="<?= $gereja->id_informasi_gereja?>"><i class="fa fa-edit"></i> Update Profil Gereja</button>
		<?php else:?>
			<button class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#modal_insert"><i class="fa fa-pencil-alt"></i> Tambah Profil Gereja</button>
		<?php endif;?>
	</div>
</div>
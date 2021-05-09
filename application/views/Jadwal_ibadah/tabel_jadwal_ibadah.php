<table class="table table-bordered" id="tabel_jadwal_ibadah">
	<thead>
		<tr>
			<th><center>No</center></th>
			<th><center>Nama Ibadah</center></th>
			<th><center>Jenis Ibadah</center></th>
			<th><center>Kategori Ibadah</center></th>
			<th><center>Tanggal</center></th>
			<th><center>Waktu</center></th>
			<th><center>Aksi</center></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; foreach($jadwal as $row):?>
			<tr>
				<td align="center"><?= $no++?></td>
				<td><?= $row->nama_ibadah ?></td>
				<td>
					<?= ($row->jenis_ibadah == 0) ? 'Kebaktian minggu utama' : 'Kategorial'?>
				</td>
				<td>
					<?php if(!empty($row->id_kategori)):?>
						<?= $row->nama_kategori ?>
					<?php else:?>
						<center>-<center>
					<?php endif;?>
				</td>
				<td><?= date("d M Y", strtotime($row->tanggal))?></td>
				<td align="center"><?= date("H:i", strtotime($row->jam_mulai))." - ".date("H:i", strtotime($row->jam_selesai))?></td>
				<td align="center">
					<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_jadwal ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
					<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_jadwal ?>" data-namaibadah="<?= $row->nama_ibadah?>"><i class="fa fa-trash"></i></button>
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>
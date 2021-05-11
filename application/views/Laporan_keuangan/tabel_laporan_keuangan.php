<div class="table-responsive">
	<table class="table table-bordered" id="tabel_laporan_keuangan">
		<thead>
			<tr>
				<th width="5%"><center>No</center></th>
				<th><center>Tanggal</center></th>
				<th width="10%"><center>Jenis Transaksi</center></th>
				<th><center>Kategori</center></th>
				<th><center>Keterangan</center></th>
				<th><center>Jumlah</center></th>
				<th width="10%"><center>Aksi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($laporan as $row):?>
				<tr>
					<td align="center"><?= $no++?></td>
					<td><?= date("d M Y", strtotime($row->tanggal))?></td>
					<td align="center">
						<?php if($row->jenis_transaksi == 0 ):?>
							<span class="badge badge-success">Pemasukan</span>
						<?php else:?>
							<span class="badge badge-danger">Pengeluaran</span>
						<?php endif;?>
					</td>
					<td align="center">
						<?php if($row->kategori == 1):?>
							Kolekta
						<?php elseif($row->kategori == 2):?>
							Perpuluhan
						<?php elseif($row->kategori == 3):?>
							Nazar
						<?php else:?>
							Lain-lain
						<?php endif;?>
					</td>
					<td><?= $row->keterangan?></td>
					<td>Rp. <?= number_format($row->jumlah,2,',','.');?></td>
					<td align="center">
						<button class="btn btn-primary btn-sm btn-update" data-id="<?= $row->id_laporan ?>" data-toggle="modal" data-target="#modal_update"><i class="fa fa-pencil-alt"></i></button> 
						<button class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_laporan ?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
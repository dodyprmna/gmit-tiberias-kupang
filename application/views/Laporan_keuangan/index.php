<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Laporan Keuangan</h4>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form id="form-search" method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Tanggal Awal</label>
									<input class="form-control" name="tanggal_awal" type="date" required>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Tanggal Akhir</label>
									<input class="form-control" name="tanggal_akhir" type="date" required>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<button class="btn btn-primary btn-md" type="submit" style="width: 100%"><i class="fa fa-search"></i> Cari</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Input Laporan Keuangan</h4>
						</div>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="minimize"><i class="fa fa-minus"></i></button>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<form id="form_insert" method="post">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Jenis Transaksi*</label>
					        				<select class="form-control select2" data-placeholder="Pilih Jenis Transaksi" onchange="get_kategori()" name="jenis_transaksi" id="jenis_transaksi" required>
												<option value=""></option>
												<option value="0">Pemasukan</option>
												<option value="1">Pengeluaran</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Kategori*</label>
					        				<select class="form-control select2" name="kategori" id="kategori" data-placeholder="Pilih Kategori" required>
												<option value=""></option>
											</select>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Tanggal*</label>
					        				<input type="date" class="form-control" name="tanggal" required>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Jumlah*</label>
					        				<input type="number" min="1" class="form-control" name="jumlah" placeholder="Jumlah" required>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Keterangan</label>
					        				<textarea class="form-control" name="keterangan" cols="3" rows="3" placeholder="Keterangan"></textarea>
					        			</div>
									</div>
			        			</div>
			        			<div class="form-group" align="right">
			        				<button class="btn btn-danger btn-sm" type="reset">Reset</button>
			        				<button class="btn btn-primary btn-sm" type="submit">Submit</button>
			        			</div>
	        				</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4 class="card-title">Laporan Keuangan</h4>
						</div>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="add"><i class="fa fa-plus"></i></button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
				</div>
				<div class="card-body" id="list_data">
					
				</div>
			</div>
		</div>
	</div>
</div>
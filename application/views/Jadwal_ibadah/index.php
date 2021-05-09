<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Jadwal Ibadah</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Input Jadwal Ibadah</h4>
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
					        				<label>Nama Ibadah</label>
					        				<input class="form-control" type="text" name="nama_ibadah" id="nama_ibadah" placeholder="Nama Ibadah" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Jenis Ibadah</label>
					        				<select class="select2" id="jenis_ibadah" name="jenis_ibadah" onchange="cek_jenis_ibadah()" data-placeholder="Pilih jenis ibadah" required>
												<option value=""></option>
												<option value="0">Kebaktian Utama Minggu</option>
												<option value="1">Ibadah Kategorial</option>
					        				</select>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Kategori</label>
					        				<select class="select2" id="kategori" name="kategori" data-placeholder="Pilih kategori ibadah">
												<option value=""></option>
												<?php foreach($kategori as $row):?>
													<option value="<?= $row->id_kategori?>"><?= $row->nama_kategori?></option>
												<?php endforeach;?>
					        				</select>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Tanggal</label>
					        				<input class="form-control" type="date" name="tanggal" id="tanggal" required>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Jam Mulai</label>
													<input class="form-control" type="time" name="jam_mulai" id="jam_mulai" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Jam Selesai</label>
													<input class="form-control" type="time" name="jam_selesai" id="jam_selesai" required>
												</div>
											</div>
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
							<h4 class="card-title">Jadwal Ibadah</h4>
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
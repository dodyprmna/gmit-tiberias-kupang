<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Taman Kanak Kanak</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Pendaftaran Taman Kanak Kanak</h4>
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
					        				<label>Nama Lengkap*</label>
					        				<input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>NIK*</label>
					        				<input class="form-control" type="number" name="nik" id="nik" placeholder="NIK" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Jenis Kelamin*</label>
					        				<select name="jenis_kelamin" class="form-control select2" data-placeholder="Pilih Jenis Kelamin" required>
												<option value=""></option>
												<option value="1">Laki-Laki</option>
												<option value="2">Perempuan</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Tempat Lahir*</label>
					        				<input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Tanggal Lahir*</label>
					        				<input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Alamat Lengkap*</label>
					        				<textarea class="form-control" name="alamat" id="alamat" cols="3" placeholder="Alamat Lengkap" required></textarea>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Agama*</label>
					        				<input class="form-control" type="text" name="agama" id="agama" placeholder="Agama" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Kewarganegaraan*</label>
					        				<select name="kewarganegaraan" class="form-control select2" required data-placeholder="Pilih Kewarganegaraan">
												<option value=""></option>
												<option value="1">WNI</option>
												<option value="2">WNA</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Tinggal Bersama*</label>
					        				<input class="form-control" type="text" name="tinggal_bersama" id="tinggal_bersama" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Anak Ke*</label>
					        				<input class="form-control" type="number" name="anak_ke" id="anak_ke" placeholder="Anak ke" required>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Usia*</label>
					        				<input class="form-control" type="number" name="usia" id="usia" placeholder="Usia" required>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Telepon*</label>
					        				<input class="form-control" type="text" name="telepon" id="telepon" placeholder="Telepon" required>
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
							<h4 class="card-title">Data Pendaftaran Taman Kanak-Kanak</h4>
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
<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Jemaat</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Pendaftaran Jemaat</h4>
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
					        				<label>Alamat Lengkap*</label>
					        				<textarea class="form-control" name="alamat" id="alamat" cols="3" placeholder="Alamat Lengkap" required></textarea>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Email*</label>
					        				<input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Rayon*</label>
					        				<select name="rayon" class="form-control select2" data-placeholder="Pilih Rayon" required>
												<option value=""></option>
												<?php for($i = 1; $i <= 14; $i++):?>
													<option value="<?= $i?>"><?= $i?></option>
												<?php endfor;?>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Gereja Sebelumnya</label>
											<input class="form-control" type="text" name="gereja" id="gereja" placeholder="Gereja Sebelumnya">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Role Akses*</label>
											<select name="role" class="form-control select2" data-placeholder="Pilih Role Akses" required>
												<option value=""></option>
												<option value="1">Admin</option>
												<option value="2">Jemaat</option>
											</select>
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
							<h4 class="card-title">Data Jemaat</h4>
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
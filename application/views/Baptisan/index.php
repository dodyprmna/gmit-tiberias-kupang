<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Baptisan</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Pendaftaran Baptisan</h4>
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
					        				<label>Nama Ayah*</label>
					        				<input class="form-control" type="text" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Nama Ibu*</label>
					        				<input class="form-control" type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Tanggal Baptis*</label>
					        				<input class="form-control" type="date" name="tanggal_baptis" id="tanggal_baptis" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Tempat Baptis*</label>
											<textarea class="form-control" name="tempat_baptis" id="tempat_baptis" cols="3" placeholder="Tempat Baptis" required></textarea>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Oleh*</label>
					        				<input class="form-control" type="text" name="oleh" id="oleh" placeholder="Oleh" required>
					        				
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
							<h4 class="card-title">Data Baptisan</h4>
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
<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Perkawinan</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Pendaftaran Perkawinan</h4>
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
									<div class="col-md-6">
										<div class="form-group">
											<label>Gereja*</label>
											<input type="text" class="form-control" name="gereja" placeholder="Gereja" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Tanggal Pemberkatan*</label>
											<input type="date" class="form-control" name="tanggal_pemberkatan" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label><i class="fa fa-mars fa-2x" style="color: blue;"></i> Data Calon Suami</label>
										</div>
									</div>
								</div>
								<div class="row ml-2">
									<div class="col-md-12">
										<div class="form-group">
											<label><i class="fa fa-circle"></i> Pribadi</label>
										</div>
									</div>
								</div>
								<div class="row ml-3">
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Nama Lengkap*</label>
					        				<input class="form-control" type="text" name="nama_calon_suami" id="nama_calon_suami" placeholder="Nama Calon Suami" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Tempat Lahir*</label>
					        				<input class="form-control" type="text" name="tempat_lahir_calon_suami" id="tempat_lahir_calon_suami" placeholder="Tempat Lahir" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Tanggal Lahir*</label>
					        				<input class="form-control" type="date" name="tanggal_lahir_calon_suami" id="tanggal_lahir_calon_suami" placeholder="Tanggal Lahir" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Alamat Lengkap*</label>
					        				<textarea class="form-control" name="alamat_calon_suami" id="alamat_calon_suami" cols="3" placeholder="Alamat Lengkap" required></textarea>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Telepon*</label>
					        				<input class="form-control" type="number" name="telepon_calon_suami" id="telepon_calon_suami" placeholder="Telepon" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Agama*</label>
					        				<input class="form-control" type="text" name="agama_calon_suami" id="agama_calon_suami" placeholder="Agama" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Gereja*</label>
					        				<input class="form-control" type="text" name="gereja_calon_suami" id="gereja_calon_suami" placeholder="Gereja" required>
										</div>
									</div>
			        			</div>
								<div class="row ml-2">
									<div class="col-md-12">
										<div class="form-group">
											<label><i class="fa fa-circle"></i> Ayah</label>
										</div>
									</div>
								</div>
								<div class="row ml-3">
									<div class="col-md-3">
										<div class="form-group">
											<label>Nama*</label>
											<input class="form-control" type="text" name="nama_ayah_calon_suami" id="nama_ayah_calon_suami" placeholder="Nama" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Alamat*</label>
											<textarea class="form-control" name="alamat_ayah_calon_suami" id="alamat_ayah_calon_suami" cols="3" placeholder="Alamat" required></textarea>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Agama*</label>
											<input class="form-control" type="text" name="agama_ayah_calon_suami" id="agama_ayah_calon_suami" placeholder="Agama" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Pekerjaan*</label>
											<input class="form-control" type="text" name="pekerjaan_ayah_calon_suami" id="pekerjaan_ayah_calon_suami" placeholder="Pekerjaan" required>
										</div>
									</div>
								</div>
								<div class="row ml-2">
									<div class="col-md-12">
										<div class="form-group">
											<label><i class="fa fa-circle"></i> Ibu</label>
										</div>
									</div>
								</div>
								<div class="row ml-3">
									<div class="col-md-3">
										<div class="form-group">
											<label>Nama*</label>
											<input class="form-control" type="text" name="nama_ibu_calon_suami" id="nama_ibu_calon_suami" placeholder="Nama ibu" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Alamat*</label>
											<textarea class="form-control" name="alamat_ibu_calon_suami" id="alamat_ibu_calon_suami" cols="3" placeholder="Alamat" required></textarea>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Agama*</label>
											<input class="form-control" type="text" name="agama_ibu_calon_suami" id="agama_ibu_calon_suami" placeholder="Agama" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Pekerjaan*</label>
											<input class="form-control" type="text" name="pekerjaan_ibu_calon_suami" id="pekerjaan_ibu_calon_suami" placeholder="Pekerjaan" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label><i class="fa fa-venus fa-2x" style="color: red;"></i> Data Calon Istri</label>
										</div>
									</div>
								</div>
								<div class="row ml-2">
									<div class="col-md-12">
										<div class="form-group">
											<label><i class="fa fa-circle"></i> Pribadi</label>
										</div>
									</div>
								</div>
								<div class="row ml-3">
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Nama Lengkap*</label>
					        				<input class="form-control" type="text" name="nama_calon_istri" id="nama_calon_istri" placeholder="Nama Calon istri" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Tempat Lahir*</label>
					        				<input class="form-control" type="text" name="tempat_lahir_calon_istri" id="tempat_lahir_calon_istri" placeholder="Tempat Lahir" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Tanggal Lahir*</label>
					        				<input class="form-control" type="date" name="tanggal_lahir_calon_istri" id="tanggal_lahir_calon_istri" placeholder="Tanggal Lahir" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Alamat Lengkap*</label>
					        				<textarea class="form-control" name="alamat_calon_istri" id="alamat_calon_istri" cols="3" placeholder="Alamat Lengkap" required></textarea>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Telepon*</label>
					        				<input class="form-control" type="number" name="telepon_calon_istri" id="telepon_calon_istri" placeholder="Telepon" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Agama*</label>
					        				<input class="form-control" type="text" name="agama_calon_istri" id="agama_calon_istri" placeholder="Agama" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
					        				<label>Gereja*</label>
					        				<input class="form-control" type="text" name="gereja_calon_istri" id="gereja_calon_istri" placeholder="Gereja" required>
										</div>
									</div>
			        			</div>
								<div class="row ml-2">
									<div class="col-md-12">
										<div class="form-group">
											<label><i class="fa fa-circle"></i> Ayah</label>
										</div>
									</div>
								</div>
								<div class="row ml-3">
									<div class="col-md-3">
										<div class="form-group">
											<label>Nama*</label>
											<input class="form-control" type="text" name="nama_ayah_calon_istri" id="nama_ayah_calon_istri" placeholder="Nama" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Alamat*</label>
											<textarea class="form-control" name="alamat_ayah_calon_istri" id="alamat_ayah_calon_istri" cols="3" placeholder="Alamat" required></textarea>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Agama*</label>
											<input class="form-control" type="text" name="agama_ayah_calon_istri" id="agama_ayah_calon_istri" placeholder="Agama" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Pekerjaan*</label>
											<input class="form-control" type="text" name="pekerjaan_ayah_calon_istri" id="pekerjaan_ayah_calon_istri" placeholder="Pekerjaan" required>
										</div>
									</div>
								</div>
								<div class="row ml-2">
									<div class="col-md-12">
										<div class="form-group">
											<label><i class="fa fa-circle"></i> Ibu</label>
										</div>
									</div>
								</div>
								<div class="row ml-3">
									<div class="col-md-3">
										<div class="form-group">
											<label>Nama*</label>
											<input class="form-control" type="text" name="nama_ibu_calon_istri" id="nama_ibu_calon_istri" placeholder="Nama ibu" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Alamat*</label>
											<textarea class="form-control" name="alamat_ibu_calon_istri" id="alamat_ibu_calon_istri" cols="3" placeholder="Alamat" required></textarea>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Agama*</label>
											<input class="form-control" type="text" name="agama_ibu_calon_istri" id="agama_ibu_calon_istri" placeholder="Agama" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Pekerjaan*</label>
											<input class="form-control" type="text" name="pekerjaan_ibu_calon_istri" id="pekerjaan_ibu_calon_istri" placeholder="Pekerjaan" required>
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
							<h4 class="card-title">Data Perkawinan</h4>
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
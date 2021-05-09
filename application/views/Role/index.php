<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Role</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form input Role</h4>
						</div>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="minimize"><i class="fa fa-minus"></i></button>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row" >
						<div class="col-md-12">
							<form id="form_insert" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
					        				<label>Nama Role</label>
					        				<input class="form-control" type="text" name="nama_role" id="nama_role" required>
					        			</div>
									</div>
									<div class="col-md-6">
					        			<div class="form-group">
					        				<div class="row">
					        					<div class="col-md-6">
					        						<label>Akses Role</label>
					        					</div>
					        				</div>
					        				<div class="row">
					        					<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="1"> Dashboard
					        					</div>
					        					<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="2"> Program Kerja
					        					</div>
					        					<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="3"> Kegiatan
												</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="4"> Kegiatan (Insert Update)
					        					</div>
					        					<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="5"> Detail Kegiatan
					        					</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="6"> Kinerja Kegiatan
												</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="7"> Prestasi
												</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="8"> Prestasi (Proses)
												</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="9"> Capaian Kegiatan
												</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="10"> Master User
												</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="11"> Master Role
												</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="12"> Budgeting
												</div>
												<div class="col-md-4">
					        						<input type="checkbox" style="margin-right: 7px" name="akses[]" value="13"> Report
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
							<h4 class="card-title">List Role</h4>
						</div>
						<div class="col-md-6" align="right">
							<button class="btn btn-primary btn-sm" data-plugin="add"><i class="fa fa-plus"></i></button>
						</div>
					</div>
				</div>
				<div class="card-body" id="list_data">
					
				</div>
			</div>
		</div>
	</div>
</div>
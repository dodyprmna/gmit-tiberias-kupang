<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">User</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Input User</h4>
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
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Nama User</label>
					        				<input class="form-control" type="text" name="nama_user" id="nama_user" placeholder="Nama User" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Username</label>
					        				<input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
					        			</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
					        				<label>Role</label>
					        				<select class="select2" id="role" name="role" data-placeholder="Pilih role" required>
												<option value=""></option>
												<option value="1">Admin</option>
												<option value="2">Member</option>
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
							<h4 class="card-title">Daftar user</h4>
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
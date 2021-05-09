<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Ubah Password</h4>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form ubah password</h4>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row" >
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group" id="pass_lama">
					        				<label id="password_lama" style="color: red">Password Lama</label>
					        				<input class="form-control" type="password" name="old_password" id="old_password" placeholder="Masukkan password lama" required>
					        				<span id="info" style="color: red; display: none">password salah</span>
					        			</div>
					        			<div class="form-group" style="float: right;">
					        				<button class="btn btn-info btn-sm btn-cek" type="button">Cek</button>
					        			</div>
									</div>
			        			</div>
			        			<form id="form_ubah_password" method="post">
			        			<div id="new" style="display: none">
				        			<div class="row">
				        				<div class="col-md-12">
				        					<div class="form-group">
						        				<label>Password Baru</label>
						        				<input class="form-control" type="password" name="password_baru" id="password_baru" placeholder="Masukkan password baru" required>
						        			</div>
						        			<div class="form-group" id="repas">
						        				<label>Validasi password baru</label>
						        				<input class="form-control" type="password" name="validasi_password_baru" id="validasi_password_baru" placeholder="Masukkan ulang password baru" onkeyup="validasi_pass_baru()" required>
						        				<span id="info_password_baru" style="color: red"></span>
						        			</div>
				        				</div>
				        			</div>
				        			<div class="form-group" align="right">
				        				<button class="btn btn-danger btn-sm" type="reset">Batal</button>
				        				<button class="btn btn-primary btn-sm" type="submit" id="btn-submit" disabled>Simpan</button>
				        				<img src="<?= base_url('assets/img/loading1.gif') ?>" style="width: 50px; display: none">
				        			</div>
				        		</div>
	        				</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
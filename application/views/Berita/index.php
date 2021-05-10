<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Berita</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Input Berita</h4>
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
					        				<label>Judul Berita*</label>
					        				<input class="form-control" type="text" name="judul_berita" id="judul_berita" placeholder="Judul Berita" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
					        				<label>File*</label>
					        				<input class="form-control" name="foto[]" type="file" accept=".png, .jpg" multiple>
					        			</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
					        				<label>Isi Berita*</label>
					        				<textarea class="form-control" name="isi_berita" id="isi_berita" rows="3" placeholder="Isi Berita"></textarea>
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
							<h4 class="card-title">Data Berita</h4>
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
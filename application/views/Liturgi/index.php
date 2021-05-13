<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Liturgi</h4>
	</div>

	<div class="row">
		<div class="col-md-12 panel_add" style="display: none">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Form Input Liturgi</h4>
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
					        				<label>Jadwal Ibadah*</label>
					        				<select class="form-control select2" name="id_jadwal_ibadah" id="id_jadwal_ibadah" data-placeholder="Pilih jadwal ibadah" required>
												<option value=""></option>
												<?php foreach($jadwal as $row):?>
													<option value="<?= $row->id_jadwal?>"><?= $row->nama_ibadah." - ".date("d M Y", strtotime($row->tanggal))?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
					        				<label>File* (.pdf)</label>
					        				<input class="form-control" type="file" name="file" accept=".pdf" required>
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
							<h4 class="card-title">Data Liturgi</h4>
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
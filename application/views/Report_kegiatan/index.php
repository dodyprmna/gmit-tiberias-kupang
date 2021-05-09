<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Report Kegiatan</h4>
	</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
				<div class="card-header">
                    <h4 class="card-title">Pencarian</h4>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<form id="form_report_kegiatan" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Bulan</label>
											<select class="form-control select2" name="bulan" id="bulan">
                                                <option value="0">- Pilih Bulan -</option>
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Tahun</label>
											<select class="form-control select2" name="tahun" id="tahun">
                                                <option value="0">- Pilih Tahun -</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                            </select>
										</div>
									</div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" style="width: 100%;">
                                                <div id="btn-title">Cari</div>
                                            </button>
                                        </div>
                                    </div>
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
				<div class="row">
                    <div class="col-md-12">
                        <div class="card-body print_kegiatan" id="list_report">
                            <center>Klik <b>Cari</b> untuk melihat report</center>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
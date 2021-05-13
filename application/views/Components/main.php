<?php $this->load->view('Components/header_html')?>
	<div class="wrapper">
		<?php $this->load->view('Components/header')?>

		<!-- Sidebar -->
		<?php $this->load->view('Components/sidebar')?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<!-- content -->
				<?php $this->load->view($content)?>
				<!-- end content -->
			</div>

			<!-- Modal update-->
			<div class="modal fade" id="modal_update" role="dialog"  aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Form update</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-12">
				        	<form id="form_update" method="post" enctype="multipart/form-data">
					        	<div class="row" id="target_update">
					        		
					        	</div>
					        	<div class="form-group" align="right">
									<button class="btn btn-primary btn-sm" type="submit">Simpan</button>
								</div>
					        </form>
					    </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Modal Insert Profile Gereja-->
			<div class="modal fade" id="modal_insert" role="dialog"  aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Form Input Profile Gereja</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-12">
				        	<form id="form_insert" method="post" enctype="multipart/form-data">
					        	<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Nama Gereja</label>
											<input type="text" class="form-control" name="nama_gereja" placeholder="Nama Gereja" required>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Alamat Gereja</label>
											<textarea name="alamat_gereja" class="form-control" cols="3" placeholder="Alamat Gereja" required></textarea>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Tentang Kami</label>
											<textarea name="tentang_kami" class="form-control" cols="3" placeholder="Tentang Kami" required></textarea>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Pelayanan Gereja</label>
											<textarea name="pelayanan_gereja" class="form-control" cols="3" placeholder="Pelayanan Gereja" required></textarea>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Kontak</label>
											<textarea name="kontak" class="form-control" cols="3" placeholder="Kontak" required></textarea>
										</div>
									</div>
					        	</div>
					        	<div class="form-group" align="right">
									<button class="btn btn-primary btn-sm" type="submit">Simpan</button>
								</div>
					        </form>
					    </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Modal preview -->

			<div class="modal fade" id="modal_preview" tabindex="-1" role="dialog"  aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-12" id="target_preview">
			        		
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
			
			<!-- footer -->
			<?php $this->load->view('Components/footer')?>
			<!-- end footer -->
	<!--   Footer html   -->
	<?php $this->load->view('Components/footer_html')?>
	<!-- End footer html -->
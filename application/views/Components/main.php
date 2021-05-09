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
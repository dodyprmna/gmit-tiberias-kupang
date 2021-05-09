$(document).ready(function(){

	list();

	$('[data-plugin="add"]').click(function(){
		$('.panel_add').slideDown();
		$('[data-plugin="add"]').slideUp();
	});

	$('[data-plugin="minimize"]').click(function(){
		$('.panel_add').slideUp();
		$('[data-plugin="add"]').slideDown();
	});

	
	// ----insert-------

	$('#form_insert').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"User/insert/",
			type: 'post',
			dataType: 'json',
			data: $(this).serialize(),
			success:function(data){
				if (data['status']) {
					$('#form_insert')[0].reset();
					swal({
					  title: "Sukses",
					  text : data.pesan,
					  icon: "success",
					});
					list();
				}else{
					swal({
					  title: "Gagal",
					  text : data.pesan,
					  icon: "error",
					});
				}
			}
		});
	});

	// ------- proses update --------
	$('#form_update').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"User/update_user/",
			type: 'post',
			dataType: 'json',
			data: $(this).serialize(),
			success:function(data){
				if (data['status']) {
					$('#modal_update').modal('hide');
					swal({
					  title: data.pesan,
					  icon: "success",
					});
					list();
				}else{
					swal({
					  title: data.pesan,
					  icon: "error",
					});
				}
			}
		});
	});

	$('#form_ubah_password').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"User/ubah_password/",
			type: 'post',
			dataType: 'json',
			data: $(this).serialize(),
			success:function(data){
				if (data['status']) {
					$('#form_ubah_password')[0].reset();
					$('#pass_lama').val('');
					swal({
					  title: data.pesan,
					  icon: "success",
					});
					setTimeout(function() {
					  window.location.replace(base_url+'Dashboard');
					}, 1500);
					$('#new').hide();
				}else{
					swal({
					  title: data.pesan,
					  icon: "error",
					});
				}
			}
		});
	});

	// ------- update -------
	$(document).on('click','.btn-update',function(){
		var id = $(this).data('id');

		$.ajax({
			url: base_url+"User/data_update",
			type: 'post',
			dataType: 'json',
			data:{id:id},
			success:function(data){
				$('#target_update').html(data['html']);
				$('.select2').select2({
		            theme: 'bootstrap4',
		            width : '100%',
        		});
			}
		})
	});

	$(document).on('click','.btn-cek',function(){
		var password = $('#old_password').val();

		$.ajax({
			url: base_url+"User/validasi_password/",
			type : 'post',
			dataType: 'json',
			data : {old_password : password},
			success:function(data){
				if (data['status']) {
					$('#pass_lama').removeAttr('class');
					$('#pass_lama').attr('class','form-group');
					$('#info').hide();
					$('#new').show();
				}else{
					$('#pass_lama').removeAttr('class');
					$('#pass_lama').attr('class','form-group has-error has-feedback');
					$('#info').show();
					$('#new').hide();
				}
			}
		});
	});

	$(document).on('click','.btn-resetpassword',function(){
		var id = $(this).data('id');

		if (confirm('Reset password?')) {	
			$.ajax({
				url: base_url+'User/reset_password/',
				type: 'post',
				dataType: 'json',
				data: {id: id},
				success:function(data){
					if (data['status']) {
						swal({
						  title: data.pesan,
						  icon: "success",
						});
						
					}else{
						swal({
						  title: data.pesan,
						  icon: "success",
						});
					}
				}
			});
		}
	});

	$('#vendor').change(function(){
		var id = $('#vendor').val();

		if (id == '-') {

			$('#nama_user').val('');
			$('#username').val('');

		}else{
			$.ajax({
				url: base_url+"User/get_vendor/",
				type: 'post',
				dataType: 'json',
				data: {id : id},
				success:function(data){
					$('#nama_user').val(data.nama_vendor);
					$('#username').val(data.npwp);
				}
			});
		}
	});
});

function list(){
	$('#list_data').html("<center><h2>Loading...</h2></center>");

	$.ajax({
		url: base_url+"User/list_user/",
		dataType: 'json',
		success:function(data){
			$('#list_data').html(data);
			$('#tabel_user').dataTable({
				stateSave: true
			});
		}
	});
}

function validasi_pass_baru() {
	$password_baru = $('#password_baru').val();
	$repas		   = $('#validasi_password_baru').val();

	if ($password_baru == $repas){
		$('#repas').removeAttr('class');
		$('#repas').attr('class','form-group');
		$('#btn-submit').removeAttr('disabled');
		$('#info_password_baru').hide();
	}else{
		$('#repas').removeAttr('class');
		$('#repas').attr('class','form-group has-error has-feedback');
		$('#info_password_baru').text(' Validasi password tidak sama');
		$('#btn-submit').attr('disabled','disabled');
	}
}
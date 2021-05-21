$(document).ready(function () {
	list();

	$('[data-plugin="add"]').click(function () {
		$(".panel_add").slideDown();
		$('[data-plugin="add"]').slideUp();
	});

	$('[data-plugin="minimize"]').click(function () {
		$(".panel_add").slideUp();
		$('[data-plugin="add"]').slideDown();
	});

	// ----insert-------

	$("#form_insert").submit(function (e) {
		e.preventDefault();

		$.ajax({
			url: base_url + "Jemaat/insert/",
			type: "post",
			dataType: "json",
			data: $(this).serialize(),
			success: function (data) {
				if (data["status"]) {
					$("#form_insert")[0].reset();
					swal({
						title: "Berhasil",
						text: data.pesan,
						icon: "success",
					});
					list();
				} else {
					swal({
						title: "Gagal",
						text: data.pesan,
						icon: "error",
					});
				}
			},
		});
	});

	$("#form_update").submit(function (e) {
		e.preventDefault();

		$.ajax({
			url: base_url + "Jemaat/update_jemaat/",
			type: "post",
			dataType: "json",
			data: $(this).serialize(),
			success: function (data) {
				if (data["status"]) {
					swal({
						title: "Berhasil",
						text: data.pesan,
						icon: "success",
					});
					$("#modal_update").modal("hide");
					list();
				} else {
					swal({
						title: "Gagal",
						text: data.pesan,
						icon: "error",
					});
				}
			},
		});
	});

	// ------- update -------
	$(document).on("click", ".btn-update", function () {
		var id = $(this).data("id");

		$.ajax({
			url: base_url + "Jemaat/data_update",
			type: "post",
			dataType: "json",
			data: { id: id },
			success: function (data) {
				$("#target_update").html(data["html"]);
			},
		});
	});

	// ------- delete -------
	$(document).on("click", ".btn-delete", function () {
		var id = $(this).data("id");
		var nama = $(this).data("nama");

		swal({
			title: "Apakah anda yakin?",
			icon: "warning",
			text: 'ingin menghapus data jemaat "' + nama + '"',
			buttons: true,
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: base_url + "Jemaat/delete/",
					type: "post",
					dataType: "json",
					data: { id: id },
					success: function (data) {
						if (data["status"]) {
							swal({
								title: "Berhasil",
								text: data.pesan,
								icon: "success",
							});
							list();
						} else {
							swal({
								title: "Gagal",
								text: data.pesan,
								icon: "error",
							});
						}
					},
				});
			}
		});
	});

	// ------- aktivasi -------
	$(document).on("click", ".btn-aktivasi", function () {
		var id = $(this).data("id");

		swal({
			title: "Apakah anda yakin?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: base_url + "Jemaat/aktivasi/",
					type: "post",
					dataType: "json",
					data: { id: id },
					success: function (data) {
						if (data["status"]) {
							swal({
								title: "Berhasil",
								text: data.pesan,
								icon: "success",
							});
							list();
						} else {
							swal({
								title: "Gagal",
								text: data.pesan,
								icon: "error",
							});
						}
					},
				});
			}
		});
	});

	$(document).on("click", ".btn-cek", function () {
		var password = $("#old_password").val();

		$.ajax({
			url: base_url + "Jemaat/validasi_password/",
			type: "post",
			dataType: "json",
			data: { old_password: password },
			success: function (data) {
				if (data["status"]) {
					$("#pass_lama").removeAttr("class");
					$("#pass_lama").attr("class", "form-group");
					$("#info").hide();
					$("#new").show();
				} else {
					$("#pass_lama").removeAttr("class");
					$("#pass_lama").attr("class", "form-group has-error has-feedback");
					$("#info").show();
					$("#new").hide();
				}
			},
		});
	});

	$("#form_ubah_password").submit(function (e) {
		e.preventDefault();

		$.ajax({
			url: base_url + "Jemaat/ubah_password/",
			type: "post",
			dataType: "json",
			data: $(this).serialize(),
			success: function (data) {
				if (data["status"]) {
					$("#form_ubah_password")[0].reset();
					$("#pass_lama").val("");
					swal({
						title: data.pesan,
						icon: "success",
					});
					setTimeout(function () {
						window.location.replace(base_url + "Dashboard");
					}, 1500);
					$("#new").hide();
				} else {
					swal({
						title: data.pesan,
						icon: "error",
					});
				}
			},
		});
	});
});

function list() {
	$("#list_data").html("<center><h2>Loading...</h2></center>");

	$.ajax({
		url: base_url + "Jemaat/list_jemaat",
		dataType: "json",
		success: function (data) {
			$("#list_data").html(data);
			$("#tabel_jemaat").dataTable({
				stateSave: true,
			});
		},
	});
}

function validasi_pass_baru() {
	$password_baru = $("#password_baru").val();
	$repas = $("#validasi_password_baru").val();

	if ($password_baru == $repas) {
		$("#repas").removeAttr("class");
		$("#repas").attr("class", "form-group");
		$("#btn-submit").removeAttr("disabled");
		$("#info_password_baru").hide();
	} else {
		$("#repas").removeAttr("class");
		$("#repas").attr("class", "form-group has-error has-feedback");
		$("#info_password_baru").text(" Validasi password tidak sama");
		$("#btn-submit").attr("disabled", "disabled");
	}
}

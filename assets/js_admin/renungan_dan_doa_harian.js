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
			url: base_url + "Renungan_dan_doa_harian/insert/",
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
			url: base_url + "Renungan_dan_doa_harian/update_renungan_dan_doa_harian/",
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
			url: base_url + "Renungan_dan_doa_harian/data_update",
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

		swal({
			title: "Apakah anda yakin?",
			icon: "warning",
			text: "ingin menghapus renungan dan doa harian",
			buttons: true,
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: base_url + "Renungan_dan_doa_harian/delete/",
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
});

function list() {
	$("#list_data").html("<center><h2>Loading...</h2></center>");

	$.ajax({
		url: base_url + "Renungan_dan_doa_harian/list_renungan_dan_doa_harian",
		dataType: "json",
		success: function (data) {
			$("#list_data").html(data);
			$("#tabel_renungan").dataTable({
				stateSave: true,
			});
		},
	});
}

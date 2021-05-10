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
			url: base_url + "Berita/insert/",
			type: "post",
			dataType: "json",
			data: new FormData(this),
			cache: false,
			contentType: false,
			processData: false,
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
			url: base_url + "Berita/update_berita/",
			type: "post",
			dataType: "json",
			data: new FormData(this),
			cache: false,
			contentType: false,
			processData: false,
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
			url: base_url + "Berita/data_update",
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
		var berita = $(this).data("berita");

		swal({
			title: "Apakah anda yakin?",
			icon: "warning",
			text: 'ingin menghapus berita "' + berita + '"',
			buttons: true,
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: base_url + "Berita/delete/",
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

	// ------- delete file -------
	$(document).on("click", ".btn-delete-file", function () {
		var id = $(this).data("id");
		var nama_file = $(this).data("filename");
		var id_berita = $(this).data("idberita");

		swal({
			title: "Apakah anda yakin?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: base_url + "Berita/delete_file/",
					type: "post",
					dataType: "json",
					data: { id: id, nama_file: nama_file, id_berita: id_berita },
					success: function (data) {
						if (data["status"]) {
							$("#target_update").html(data["html"]);
							swal({
								title: "Berhasil",
								text: data.pesan,
								icon: "success",
							});
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
		url: base_url + "Berita/list_berita",
		dataType: "json",
		success: function (data) {
			$("#list_data").html(data);
			$("#tabel_berita").dataTable({
				stateSave: true,
			});
		},
	});
}

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
			url: base_url + "Laporan_keuangan/insert/",
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
			url: base_url + "Laporan_keuangan/update_laporan_keuangan/",
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
			url: base_url + "Laporan_keuangan/data_update",
			type: "post",
			dataType: "json",
			data: { id: id },
			success: function (data) {
				$("#target_update").html(data["html"]);
			},
		});
	});

	// ------- update -------
	$(document).on("click", ".btn-delete", function () {
		var id = $(this).data("id");

		swal({
			title: "Apakah anda yakin?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: base_url + "Laporan_keuangan/delete/",
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

	$("#form-search").submit(function (e) {
		e.preventDefault();

		$.ajax({
			url: base_url + "Laporan_keuangan/search/",
			type: "post",
			dataType: "json",
			data: $(this).serialize(),
			success: function (data) {
				$("#list_data").html(data);
			},
		});
	});
});

function list() {
	$("#list_data").html("<center><h2>Loading...</h2></center>");

	$.ajax({
		url: base_url + "Laporan_keuangan/list_laporan_keuangan",
		dataType: "json",
		success: function (data) {
			$("#list_data").html(data);
		},
	});
}

function get_kategori() {
	var id = $("#jenis_transaksi").val();
	var html = "";

	if (id == 0) {
		html +=
			"<option value='1'>Kolekte</option><option value='2'>Perpuluhan</option><option value='3'>Nazar</option><option value='4'>Lain-lain</option>";
	} else {
		html += "<option value='4'>Lain-lain</option>";
	}

	$("#kategori").html(html);
}

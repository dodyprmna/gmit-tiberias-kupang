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
			url: base_url + "Baptisan/insert/",
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
			url: base_url + "Baptisan/update_baptisan/",
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
			url: base_url + "Baptisan/data_update",
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
			text: 'ingin menghapus data baptisan atas nama "' + nama + '"',
			buttons: true,
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: base_url + "Baptisan/delete/",
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
		url: base_url + "Baptisan/list_baptisan",
		dataType: "json",
		success: function (data) {
			$("#list_data").html(data);
			$("#tabel_baptisan").dataTable({
				stateSave: true,
			});
		},
	});
}

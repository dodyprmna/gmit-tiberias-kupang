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
			url: base_url + "Role/insert/",
			type: "post",
			dataType: "json",
			data: $(this).serialize(),
			success: function (data) {
				if (data["status"]) {
					$("#form_insert")[0].reset();
					swal({
						title: data.pesan,
						icon: "success",
					});
					list();
				} else {
					swal({
						title: data.pesan,
						icon: "error",
					});
				}
			},
		});
	});

	// ------- proses update --------
	$("#form_update").submit(function (e) {
		e.preventDefault();

		$.ajax({
			url: base_url + "Role/update_role/",
			type: "post",
			dataType: "json",
			data: $(this).serialize(),
			success: function (data) {
				if (data["status"]) {
					$("#modal_update").modal("hide");
					swal({
						title: data.pesan,
						icon: "success",
					});
					list();
				} else {
					swal({
						title: data.pesan,
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
			url: base_url + "Role/data_update",
			type: "post",
			dataType: "json",
			data: { id: id },
			success: function (data) {
				$("#target_update").html(data["html"]);
			},
		});
	});
});

function list() {
	$("#list_data").html("<center><h2>Loading...</h2></center>");

	$.ajax({
		url: base_url + "Role/table_role",
		dataType: "json",
		success: function (data) {
			$("#list_data").html(data);
			$("#tabel_role").dataTable({
				stateSave: true,
			});
		},
	});
}

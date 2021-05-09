$(document).ready(function(){
	
	// ----Search report kegiatan-------

	$('#form_report_kegiatan').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"Report_kegiatan/list/",
			type: 'post',
			dataType: 'json',
			data: new FormData(this),
			cache : false,
			contentType : false,
			processData : false,
			success:function(data){
                $('#list_report').html(data);
                $('#tabel_kegiatan').dataTable({stateSave: true});
			}
		});
    });
    
    $('#form_report_proker').submit(function(e){
		e.preventDefault();

		$.ajax({
			url: base_url+"Report_proker/list/",
			type: 'post',
			dataType: 'json',
			data: new FormData(this),
			cache : false,
			contentType : false,
			processData : false,
			success:function(data){
                $('#list_report').html(data);
                $('#tabel_proker').dataTable({stateSave: true});
			}
		});
	});
});

function printkegiatan() {
    $('#tabel_kegiatan').DataTable().destroy();
    $('.btnprint').html("");


	$(".print_kegiatan").print({
        globalStyles: true,
        mediaPrint: true,
        noPrintSelector: ".no-print",
        iframe: true,
        append: null,
        prepend: null,
        manuallyCopyFormValues: true,
        deferred: $.Deferred(),
        timeout: 750,
        title: null,
        doctype: "<!doctype html>",
      });

    $('.btnprint').html('<div class="col-md-12 mb-3" align="right"><button class="btn btn-primary btn-sm" onclick="printkegiatan()"><i class="fa fa-file-pdf fa-2x"></i></button></div>')
	$('#tabel_kegiatan').addClass('table table-bordered');
	$('#tabel_kegiatan').DataTable();
}

function printproker() {
    $('#tabel_proker').DataTable().destroy();
    $('.btnprint').html("");


	$(".print_proker").print({
        globalStyles: true,
        mediaPrint: true,
        noPrintSelector: ".no-print",
        iframe: true,
        append: null,
        prepend: null,
        manuallyCopyFormValues: true,
        deferred: $.Deferred(),
        timeout: 750,
        title: null,
        doctype: "<!doctype html>",
      });

    $('.btnprint').html('<div class="col-md-12 mb-3" align="right"><button class="btn btn-primary btn-sm" onclick="printproker()"><i class="fa fa-file-pdf fa-2x"></i></button></div>')
	$('#tabel_proker').addClass('table table-bordered');
	$('#tabel_proker').DataTable();
}
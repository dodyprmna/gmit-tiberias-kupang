<?php 


	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];

	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM baptisan WHERE id_baptisan=$id";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_baptisan"		=>$row['id_baptisan'],
			"nama"				=>$row['nama'],
			"tempat_lahir"		=>$row['tempat_lahir'],
			"tanggal_lahir"		=>$row['tanggal_lahir'],
			"alamat"			=>$row['alamat'],
			"nama_ayah"			=>$row['nama_ayah'],
			"nama_ibu"			=>$row['nama_ibu'],
			"tanggal_baptis"	=>$row['tanggal_baptis'],
			"tempat_baptis"		=>$row['tempat_baptis'],
			"oleh"				=>$row['oleh'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>

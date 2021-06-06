<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM jemaat";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_jemaat"=>$row['id_jemaat'],
			"nama"=>$row['nama'],
			"nik"=>$row['nik'],
			"gereja_sebelumnya"=>$row['gereja_sebelumnya'],
			"email"=>$row['email'],
			"rayon"=>$row['rayon'],
			"alamat"=>$row['alamat'],
			"status"=>$row['status'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
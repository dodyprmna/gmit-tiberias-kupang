<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT warta_jemaat.id_warta,warta_jemaat.file_warta,jadwal_ibadah.nama_ibadah 
			FROM warta_jemaat JOIN jadwal_ibadah ON warta_jemaat.id_jadwal=jadwal_ibadah.id_jadwal";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_warta"=>$row['id_warta'],
			"file_warta"=>$row['file_warta'],
			"nama_ibadah"=>$row['nama_ibadah'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
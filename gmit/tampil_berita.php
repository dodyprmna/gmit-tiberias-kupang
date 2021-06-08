<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	// $sql = "SELECT * FROM berita";
	$sql = "SELECT * FROM `berita` JOIN file_berita ON berita.id_berita=file_berita.id_berita";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_berita"=>$row['id_berita'],
			"judul_berita"=>$row['judul_berita'],
			"isi_berita"=>$row['isi_berita'],
			"nama_file"=>$row['nama_file']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
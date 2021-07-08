<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM informasi_gereja";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_informasi_gereja"=>$row['id_informasi_gereja'],
			"nama_gereja"=>$row['nama_gereja'],
			"alamat_gereja"=>$row['alamat_gereja'],
			"tentang_kami"=>$row['tentang_kami'],
			"pelayanan_gereja"=>$row['pelayanan_gereja'],
			"kontak"=>$row['kontak'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
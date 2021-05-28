<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT liturgi.id_liturgi,liturgi.file,jadwal_ibadah.nama_ibadah 
	FROM `liturgi` JOIN jadwal_ibadah ON liturgi.id_jadwal=jadwal_ibadah.id_jadwal";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_l"=>$row['id_liturgi'],
			"file_l"=>$row['file'],
			"nama_j"=>$row['nama_ibadah'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
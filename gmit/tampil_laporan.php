<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT MONTHNAME(`tanggal`) AS tanggal, SUM(`jumlah`) AS `jumlah` 
			FROM laporan_keuangan 
			GROUP BY MONTH(`tanggal`)";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"jumlah"=>$row['jumlah'],
			"tanggal"=>$row['tanggal']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
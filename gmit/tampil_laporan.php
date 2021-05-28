<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM laporan_keuangan";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_lap"=>$row['id_laporan'],
			"jenis_t"=>$row['jenis_transaksi'],
			"kat"=>$row['kategori'],
			"jum"=>$row['jumlah'],
			"tgl_t"=>$row['tanggal'],
			"ket_lap"=>$row['keterangan'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
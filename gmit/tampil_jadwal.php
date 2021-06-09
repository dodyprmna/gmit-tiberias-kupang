<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT `id_jadwal`,
				`id_kategori`, 
				`nama_ibadah`,
				IF(`jenis_ibadah`=0, 'Kebaktian Minggu Utama', 'Kategorial') AS jenis_ibadah, 
				`tanggal`, 
				`jam_mulai`, 
				`jam_selesai` 
			FROM `jadwal_ibadah`";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id"=>$row['id_jadwal'],
			"nama"=>$row['nama_ibadah'],
			"jenis"=>$row['jenis_ibadah'],
			"tgl"=>$row['tanggal'],
			"j_mulai"=>$row['jam_mulai'],
			"j_selesai"=>$row['jam_selesai'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
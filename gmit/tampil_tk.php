<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	// $sql = "SELECT * FROM registrasi_tk";
	$sql = "SELECT `id_registrasi`, 
					`nama_lengkap`, 
					`nik`, 
					`alamat`, 
					IF(`jenis_kelamin`='1', 'Laki-laki', 'Perempuan') AS jenis_kelamin, 
					`tempat_lahir`, 
					`tanggal_lahir`, 
					`agama`, 
					`kewarganegaraan`, 
					`tinggal_bersama`, 
					`anak_ke`, 
					`usia`, 
					`telepon` 
			FROM `registrasi_tk`";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_registrasi "		=>$row['id_registrasi'],
			"nama_lengkap"			=>$row['nama_lengkap'],
			"nik"					=>$row['nik'],
			"alamat"				=>$row['alamat'],
			"jenis_kelamin"			=>$row['jenis_kelamin'],
			"tempat_lahir"			=>$row['tempat_lahir'],
			"tanggal_lahir"			=>$row['tanggal_lahir'],
			"agama"					=>$row['agama'],
			"kewarganegaraan"		=>$row['kewarganegaraan'],
			"tinggal_bersama"		=>$row['tinggal_bersama'],
			"anak_ke"				=>$row['anak_ke'],
			"usia"					=>$row['usia'],
			"telepon"				=>$row['telepon'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM perkawinan";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_perkawinan"					=>$row['id_perkawinan'],
			"nama_calon_istri"				=>$row['nama_calon_istri'],
			"tempat_lahir_calon_istri"		=>$row['tempat_lahir_calon_istri'],
			"tanggal_lahir_calon_istri"		=>$row['tanggal_lahir_calon_istri'],
			"alamat_calon_istri"			=>$row['alamat_calon_istri'],
			"telepon_calon_istri"			=>$row['telepon_calon_istri'],
			"agama_calon_istri"				=>$row['agama_calon_istri'],
			"gereja_calon_istri"			=>$row['gereja_calon_istri'],
			"nama_calon_suami"				=>$row['nama_calon_suami'],
			"tempat_lahir_calon_suami"		=>$row['tempat_lahir_calon_suami'],
			"tanggal_lahir_calon_suami"		=>$row['tanggal_lahir_calon_suami'],
			"alamat_calon_suami"			=>$row['alamat_calon_suami'],
			"telepon_calon_suami"			=>$row['telepon_calon_suami'],
			"agama_calon_suami"				=>$row['agama_calon_suami'],
			"gereja_calon_suami"			=>$row['gereja_calon_suami'],
			"tanggal_pemberkatan"			=>$row['tanggal_pemberkatan'],
			"nama_ayah_calon_suami"			=>$row['nama_ayah_calon_suami'],
			"nama_ayah_calon_istri"			=>$row['nama_ayah_calon_istri'],
			"agama_ayah_calon_suami"		=>$row['agama_ayah_calon_suami'],
			"agama_ayah_calon_istri"		=>$row['agama_ayah_calon_istri'],
			"pekerjaan_ayah_calon_suami"	=>$row['pekerjaan_ayah_calon_suami'],
			"pekerjaan_ayah_calon_istri"	=>$row['pekerjaan_ayah_calon_istri'],
			"alamat_ayah_calon_suami"		=>$row['alamat_ayah_calon_suami'],
			"alamat_ayah_calon_istri"		=>$row['alamat_ayah_calon_istri'],
			"nama_ibu_calon_suami"			=>$row['nama_ibu_calon_suami'],
			"nama_ibu_calon_istri"			=>$row['nama_ibu_calon_istri'],
			"agama_ibu_calon_suami"			=>$row['agama_ibu_calon_suami'],
			"agama_ibu_calon_istri"			=>$row['agama_ibu_calon_istri'],
			"pekerjaan_ibu_calon_suami"		=>$row['pekerjaan_ibu_calon_suami'],
			"pekerjaan_ibu_calon_istri"		=>$row['pekerjaan_ibu_calon_istri'],
			"alamat_ibu_calon_suami"		=>$row['alamat_ibu_calon_suami'],
			"alamat_ibu_calon_istri"		=>$row['alamat_ibu_calon_istri'],
			"gereja"						=>$row['gereja'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
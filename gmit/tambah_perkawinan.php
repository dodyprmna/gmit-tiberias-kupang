<?php



	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		// $ = $_POST['id_perkawinan'];
		$nama_calon_istri = $_POST['nama_calon_istri'];
		$tempat_lahir_calon_istri = $_POST['tempat_lahir_calon_istri'];
		$tanggal_lahir_calon_istri = $_POST['tanggal_lahir_calon_istri'];
		$alamat_calon_istri = $_POST['alamat_calon_istri'];
		$telepon_calon_istri = $_POST['telepon_calon_istri'];
		$agama_calon_istri = $_POST['agama_calon_istri'];
		$gereja_calon_istri = $_POST['gereja_calon_istri'];
		$nama_calon_suami = $_POST['nama_calon_suami'];
		$tempat_lahir_calon_suami = $_POST['tempat_lahir_calon_suami'];
		$tanggal_lahir_calon_suami = $_POST['tanggal_lahir_calon_suami'];
		$alamat_calon_suami = $_POST['alamat_calon_suami'];
		$telepon_calon_suami = $_POST['telepon_calon_suami'];
		$agama_calon_suami = $_POST['agama_calon_suami'];
		$gereja_calon_suami = $_POST['gereja_calon_suami'];
		$tanggal_pemberkatan = $_POST['tanggal_pemberkatan'];
		$nama_ayah_calon_suami = $_POST['nama_ayah_calon_suami'];
		$nama_ayah_calon_istri = $_POST['nama_ayah_calon_istri'];
		$agama_ayah_calon_suami = $_POST['agama_ayah_calon_suami'];
		$agama_ayah_calon_istri = $_POST['agama_ayah_calon_istri'];
		$pekerjaan_ayah_calon_suami = $_POST['pekerjaan_ayah_calon_suami'];
		$pekerjaan_ayah_calon_istri = $_POST['pekerjaan_ayah_calon_istri'];
		$alamat_ayah_calon_suami = $_POST['alamat_ayah_calon_suami'];
		$alamat_ayah_calon_istri = $_POST['alamat_ayah_calon_istri'];
		$nama_ibu_calon_suami = $_POST['nama_ibu_calon_suami'];
		$nama_ibu_calon_istri = $_POST['nama_ibu_calon_istri'];
		$agama_ibu_calon_suami = $_POST['agama_ibu_calon_suami'];
		$agama_ibu_calon_istri = $_POST['agama_ibu_calon_istri'];
		$pekerjaan_ibu_calon_suami = $_POST['pekerjaan_ibu_calon_suami'];
		$pekerjaan_ibu_calon_istri = $_POST['pekerjaan_ibu_calon_istri'];
		$alamat_ibu_calon_suami = $_POST['alamat_ibu_calon_suami'];
		$alamat_ibu_calon_istri = $_POST['alamat_ibu_calon_istri'];
		$gereja = $_POST['gereja'];
        
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO `perkawinan`( 
				`nama_calon_istri`, 
				`tempat_lahir_calon_istri`, 
				`tanggal_lahir_calon_istri`, 
				`alamat_calon_istri`, 
				`telepon_calon_istri`, 
				`agama_calon_istri`, 
				`gereja_calon_istri`, 
				`nama_calon_suami`, 
				`tempat_lahir_calon_suami`, 
				`tanggal_lahir_calon_suami`, 
				`alamat_calon_suami`, 
				`telepon_calon_suami`, 
				`agama_calon_suami`, 
				`gereja_calon_suami`, 
				`tanggal_pemberkatan`, 
				`nama_ayah_calon_suami`, 
				`nama_ayah_calon_istri`, 
				`agama_ayah_calon_suami`, 
				`agama_ayah_calon_istri`, 
				`pekerjaan_ayah_calon_suami`, 
				`pekerjaan_ayah_calon_istri`, 
				`alamat_ayah_calon_suami`, 
				`alamat_ayah_calon_istri`, 
				`nama_ibu_calon_suami`, 
				`nama_ibu_calon_istri`, 
				`agama_ibu_calon_suami`, 
				`agama_ibu_calon_istri`, 
				`pekerjaan_ibu_calon_suami`, 
				`pekerjaan_ibu_calon_istri`, 
				`alamat_ibu_calon_suami`, 
				`alamat_ibu_calon_istri`, 
				`gereja`
			) 
			VALUES (
				'$nama_calon_istri',
				'$tempat_lahir_calon_istri',
				'$tanggal_lahir_calon_istri',
				'$alamat_calon_istri',
				'$telepon_calon_istri',
				'$agama_calon_istri',
				'$gereja_calon_istri',
				'$nama_calon_suami',
				'$tempat_lahir_calon_suami',
				'$tanggal_lahir_calon_suami',
				'$alamat_calon_suami',
				'$telepon_calon_suami',
				'$agama_calon_suami',
				'$gereja_calon_suami',
				'$tanggal_pemberkatan',
				'$nama_ayah_calon_suami',
				'$nama_ayah_calon_istri',
				'$agama_ayah_calon_suami',
				'$agama_ayah_calon_istri',
				'$pekerjaan_ayah_calon_suami',
				'$pekerjaan_ayah_calon_istri',
				'$alamat_ayah_calon_suami',
				'$alamat_ayah_calon_istri',
				'$nama_ibu_calon_suami',
				'$nama_ibu_calon_istri',
				'$agama_ibu_calon_suami',
				'$agama_ibu_calon_istri',
				'$pekerjaan_ibu_calon_suami',
				'$pekerjaan_ibu_calon_istri',
				'$alamat_ibu_calon_suami',
				'$alamat_ibu_calon_istri',
				'$gereja'
			)";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Perkawinan';
		}else{
			echo 'Gagal Menambahkan Perkawinan';
		}
		
		mysqli_close($con);
	}
?>
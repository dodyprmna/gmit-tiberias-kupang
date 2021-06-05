<?php

 /*
 
 penulis: Muhammad yusuf
 website: https://www.kodingindonesia.com/
 
 */

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama_jemaat = $_POST['nama_jemaat'];
		$nik_jemaat = $_POST['nik_jemaat'];
		$gereja_sblm = $_POST['gereja_sblm'];
		$email_jemaat = $_POST['email_jemaat'];
		$pass_jemaat = password_hash($_POST['pass_jemaat'], PASSWORD_DEFAULT);
		$rayon_jemaat = $_POST['rayon_jemaat'];
		$alamat_jemaat = $_POST['alamat_jemaat'];
        
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO jemaat 
			(nama, nik, gereja_sebelumnya, email, password, rayon, status, role, alamat) 
			VALUES ('$nama_jemaat','$nik_jemaat','$gereja_sblm','$email_jemaat','$pass_jemaat',
					'$rayon_jemaat','1','2','$alamat_jemaat')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Member';
		}else{
			echo 'Gagal Menambahkan Member';
		}
		
		mysqli_close($con);
	}
?>
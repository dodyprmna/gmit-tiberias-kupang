<?php

 /*
 
 penulis: Muhammad yusuf
 website: https://www.kodingindonesia.com/
 
 */

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$rayon = $_POST['rayon'];
		$nama = $_POST['nama'];
        
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO registrasi_member (username, password, rayon, nama) VALUES ('$user','$pass','$rayon','$nama')";
		
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
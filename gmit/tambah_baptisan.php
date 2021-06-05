<?php



	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];
		$nama_ayah = $_POST['nama_ayah'];
		$nama_ibu = $_POST['nama_ibu'];
		$tanggal_baptis = $_POST['tanggal_baptis'];
		$tempat_baptis = $_POST['tempat_baptis'];
		$oleh = $_POST['oleh'];
        
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO baptisan 
			(nama, tempat_lahir, tanggal_lahir, alamat, nama_ayah, nama_ibu, tanggal_baptis, tempat_baptis, oleh) 
			VALUES ('$nama','$tempat_lahir','$tanggal_lahir','$alamat','$nama_ayah',
					'$nama_ibu','$tanggal_baptis','$tempat_baptis','$oleh')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Baptisan';
		}else{
			echo 'Gagal Menambahkan Baptisan';
		}
		
		mysqli_close($con);
	}
?>
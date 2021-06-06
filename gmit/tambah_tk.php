<?php



	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama_lengkap = $_POST['nama_lengkap'];
		$nik = $_POST['nik'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$agama = $_POST['agama'];
		// $kewarganegaraan = $_POST['kewarganegaraan'];
		$tinggal_bersama = $_POST['tinggal_bersama'];
		$anak_ke = $_POST['anak_ke'];
		$usia = $_POST['usia'];
		$telepon = $_POST['telepon'];
        
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO `registrasi_tk`( 
				`nama_lengkap`, 
				`nik`, 
				`alamat`, 
				`jenis_kelamin`, 
				`tempat_lahir`, 
				`tanggal_lahir`, 
				`agama`, 
				`kewarganegaraan`, 
				`tinggal_bersama`, 
				`anak_ke`, 
				`usia`,
				`telepon`
			) 
			VALUES (
				'$nama_lengkap',
				'$nik',
				'$alamat',
				'$jenis_kelamin',
				'$tempat_lahir',
				'$tanggal_lahir',
				'$agama',
				'1',
				'$tinggal_bersama',
				'$anak_ke',
				'$usia',
				'$telepon'
			)";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Registrasi TK';
		}else{
			echo 'Gagal Menambahkan Registrasi TK';
		}
		
		mysqli_close($con);
	}
?>
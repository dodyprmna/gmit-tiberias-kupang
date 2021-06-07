package com.example.gmit_tiberias_kupang.Activity;

public class konfigurasi {

    //Dibawah ini merupakan Pengalamatan dimana Lokasi Skrip CRUD PHP disimpan
    //Pada tutorial Kali ini, karena kita membuat localhost maka alamatnya tertuju ke IP komputer
    //dimana File PHP tersebut berada
    //PENTING! JANGAN LUPA GANTI IP SESUAI DENGAN IP KOMPUTER DIMANA DATA PHP BERADA
    public static final String URL_GET_ALL = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_jadwal.php";
    public static final String URL_GET_ALL_PENGUMUMAN = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_pengumuman.php";
	public static final String URL_GET_ALL_LITURGI = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_liturgi.php";
	public static final String URL_GET_ALL_WARTA = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_warta.php";
	public static final String URL_GET_ALL_ARTIKEL = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_artikel.php";
	public static final String URL_GET_ALL_BERITA = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_berita.php";
    public static final String URL_ADD = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tambah_member.php";
    public static final String URL_GET_LAPORAN = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_laporan.php";
	public static final String URL_GET_ALL_INFO = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_pelayanan.php";
	public static final String URL_GET_ALL_RENUNGAN = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_renungan.php";
	public static final String URL_GET_ALL_BAPTISAN = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_baptisan.php";
	public static final String URL_GET_DETAIL_BAPTISAN = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_detail_baptisan.php";
	public static final String URL_ADD_BAPTISAN = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tambah_baptisan.php";
	public static final String URL_GET_ALL_JEMAAT = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_jemaat.php";
	public static final String URL_GET_ALL_PERKAWINAN = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_perkawinan.php";
	public static final String URL_ADD_PERKAWINAN = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tambah_perkawinan.php";
	public static final String URL_GET_ALL_TK = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tampil_tk.php";
	public static final String URL_ADD_TK = "http://192.168.0.28/gmit-tiberias-kupang/gmit/tambah_tk.php";


    // JADWAL IBADAH ============================================
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_ID_IBADAH = "id";
    public static final String KEY_NAMA_IBADAH = "nama";
    public static final String KEY_JENIS_IBADAH = "jenis";
    public static final String KEY_TGL_IBADAH = "tgl";
    public static final String KEY_J_MULAI = "j_mulai";
    public static final String KEY_J_SELESAI = "j_selesai";

    //JSON Tags
    public static final String TAG_JSON_ARRAY="result";
    public static final String TAG_ID = "id";
    public static final String TAG_NAMA = "nama";
    public static final String TAG_JENIS = "jenis";
    public static final String TAG_TGL = "tgl";
    public static final String TAG_J_MULAI = "j_mulai";
    public static final String TAG_J_SELESAI = "j_selesai";

    // PENGUMUMAN ============================================
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_ID_P = "id_p";
    public static final String KEY_JUDUL_P = "judul_p";
    public static final String KEY_ISI_P = "isi_p";

    //JSON Tags
    public static final String TAG_JSON_ARRAY_P ="result";
    public static final String TAG_ID_P = "id_p";
    public static final String TAG_JUDUL_P = "judul_p";
    public static final String TAG_ISI_P = "isi_p";

    // LITURGI ============================================
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_ID_L = "id_l";
    public static final String KEY_FILE_L = "file_l";
    public static final String KEY_NAMA_J = "nama_j";

    //JSON Tags
    public static final String TAG_JSON_ARRAY_L ="result";
    public static final String TAG_ID_L = "id_l";
    public static final String TAG_FILE_L = "file_l";
    public static final String TAG_NAMA_J = "nama_j";

	// WARTA ============================================
	//Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
	public static final String KEY_ID_WARTA = "id_warta";
	public static final String KEY_FILE_WARTA = "file_warta";
	public static final String KEY_NAMA_IBADAH_WARTA = "nama_ibadah";

	//JSON Tags
	public static final String TAG_JSON_ARRAY_WARTA ="result";
	public static final String TAG_ID_WARTA = "id_warta";
	public static final String TAG_FILE_WARTA = "file_warta";
	public static final String TAG_NAMA_IBADAH_WARTA = "nama_ibadah";

    // ARTIKEL ============================================
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_ID_A = "id_a";
    public static final String KEY_JUDUL_A = "judul_a";
    public static final String KEY_ISI_A = "isi_a";

    //JSON Tags
    public static final String TAG_JSON_ARRAY_A ="result";
    public static final String TAG_ID_A = "id_a";
    public static final String TAG_JUDUL_A = "judul_a";
    public static final String TAG_ISI_A = "isi_a";

	// BERITA ============================================
	//Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
	public static final String KEY_ID_BERITA = "id_berita";
	public static final String KEY_JUDUL_BERITA = "judul_berita";
	public static final String KEY_ISI_BERITA = "isi_berita";

	//JSON Tags
	public static final String TAG_JSON_ARRAY_BERITA ="result";
	public static final String TAG_ID_BERITA = "id_berita";
	public static final String TAG_JUDUL_BERITA = "judul_berita";
	public static final String TAG_ISI_BERITA = "isi_berita";

    // MEMBER ============================================
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
//    public static final String KEY_ID_JEMAAT = "id_m";
	public static final String KEY_NAMA_JEMAAT = "nama_jemaat";
	public static final String KEY_NIK_JEMAAT = "nik_jemaat";
	public static final String KEY_GEREJA_JEMAAT = "gereja_sblm";
    public static final String KEY_EMAIL_JEMAAT = "email_jemaat";
	public static final String KEY_PASS_JEMAAT = "pass_jemaat";
	public static final String KEY_RAYON_JEMAAT = "rayon_jemaat";
	public static final String KEY_ALAMAT_JEMAAT = "alamat_jemaat";

    //JSON Tags
    public static final String TAG_JSON_ARRAY_JEMAAT ="result";
    public static final String TAG_NAMA_JEMAAT= "nama_jemaat";
    public static final String TAG_NIK_JEMAAT = "nik_jemaat";
    public static final String TAG_GEREJA_JEMAAT = "gereja_sblm";
    public static final String TAG_EMAIL_JEMAAT = "email_jemaat";
	public static final String TAG_PASS_JEMAAT = "pass_jemaat";
	public static final String TAG_RAYON_JEMAAT = "rayon_jemaat";
	public static final String TAG_ALAMAT_JEMAAT = "alamat_jemaat";

    // LAPORAN ============================================
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_ID_LAP = "id_laporan";
    public static final String KEY_JUMLAH_LAP = "jumlah";
    public static final String KEY_TGL_LAP = "tanggal";

    //JSON Tags
    public static final String TAG_JSON_ARRAY_LAP ="result";
    public static final String TAG_ID_LAP = "id_laporan";
    public static final String TAG_JUMLAH_LAP = "jumlah";
    public static final String TAG_TGL_LAP = "tanggal";

	// PELAYANAN ============================================
	//Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
	public static final String KEY_ID_PELAYANAN = "id_informasi_gereja";
	public static final String KEY_PELAYANAN_NAMA = "nama_gereja";
	public static final String KEY_PELAYANAN_ALAMAT = "alamat_gereja";
	public static final String KEY_PELAYANAN_TENTANG = "tentang_kami";
	public static final String KEY_PELAYANAN = "pelayanan_gereja";
	public static final String KEY_KONTAK_PELAYANAN = "kontak";

	//JSON Tags
	public static final String TAG_JSON_ARRAY_PELAYANAN ="result";
	public static final String TAG_ID_PELAYANAN = "id_informasi_gereja";
	public static final String TAG_PELAYANAN_NAMA = "nama_gereja";
	public static final String TAG_PELAYANAN_ALAMAT = "alamat_gereja";
	public static final String TAG_PELAYANAN_TENTANG = "tentang_kami";
	public static final String TAG_PELAYANAN = "pelayanan_gereja";
	public static final String TAG_KONTAK_PELAYANAN = "kontak";

	// RENUNGAN ============================================
	//Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
	public static final String KEY_ID_RENUNGAN = "id_renungan_dan_doa";
	public static final String KEY_ISI_RENUNGAN = "isi";

	//JSON Tags
	public static final String TAG_JSON_ARRAY_RENUNGAN ="result";
	public static final String TAG_ID_RENUNGAN = "id_renungan_dan_doa";
	public static final String TAG_ISI_RENUNGAN= "isi";

	// BAPTISAN ============================================
	//Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
	public static final String KEY_ID_BAPTISAN = "id_baptisan";
	public static final String KEY_NAMA_BAPTISAN = "nama";
	public static final String KEY_TEMPAT_LAHIR_BAPTISAN = "tempat_lahir";
	public static final String KEY_TGL_LAHIR_BAPTISAN = "tanggal_lahir";
	public static final String KEY_ALAMAT_BAPTISAN = "alamat";
	public static final String KEY_NAMA_AYAH_BAPTISAN = "nama_ayah";
	public static final String KEY_NAMA_IBU_BAPTISAN = "nama_ibu";
	public static final String KEY_TGL_BAPTISAN = "tanggal_baptis";
	public static final String KEY_TEMPAT_BAPTISAN = "tempat_baptis";
	public static final String KEY_OLEH_BAPTISAN = "oleh";

	//JSON Tags
	public static final String TAG_JSON_ARRAY_BAPTISAN ="result";
	public static final String TAG_ID_BAPTISAN = "id_baptisan";
	public static final String TAG_NAMA_BAPTISAN = "nama";
	public static final String TAG_TEMPAT_LAHIR_BAPTISAN = "tempat_lahir";
	public static final String TAG_TGL_LAHIR_BAPTISAN = "tanggal_lahir";
	public static final String TAG_ALAMAT_BAPTISAN = "alamat";
	public static final String TAG_NAMA_AYAH_BAPTISAN = "nama_ayah";
	public static final String TAG_NAMA_IBU_BAPTISAN = "nama_ibu";
	public static final String TAG_TGL_BAPTISAN = "tanggal_baptis";
	public static final String TAG_TEMPAT_BAPTISAN = "tempat_baptis";
	public static final String TAG_OLEH_BAPTISAN = "oleh";

	//ID BAPTISAN
	public static final String BAP_ID = "bap_id";

	// JEMAAT ============================================
	//Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_ALL_ID_JEMAAT = "id_jemaat";
	public static final String KEY_ALL_NAMA_JEMAAT = "nama";
	public static final String KEY_ALL_NIK_JEMAAT = "nik";
	public static final String KEY_ALL_GEREJA_JEMAAT = "gereja_sebelumnya";
	public static final String KEY_ALL_EMAIL_JEMAAT = "email";
	public static final String KEY_ALL_RAYON = "rayon";
	public static final String KEY_ALL_ALAMAT_JEMAAT = "alamat";
	public static final String KEY_ALL_STATUS_JEMAAT = "status";

	//JSON Tags
	public static final String TAG_JSON_ARRAY_ALL_JEMAAT ="result";
	public static final String TAG_ALL_ID_JEMAAT = "id_jemaat";
	public static final String TAG_ALL_NAMA_JEMAAT= "nama";
	public static final String TAG_ALL_NIK_JEMAAT = "nik";
	public static final String TAG_ALL_GEREJA_JEMAAT = "gereja_sebelumnya";
	public static final String TAG_ALL_EMAIL_JEMAAT = "email";
	public static final String TAG_ALL_RAYON = "rayon";
	public static final String TAG_ALL_ALAMAT_JEMAAT = "alamat";
	public static final String TAG_ALL_STATUS_JEMAAT = "status";

	// PERKAWINAN ============================================
	//Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
	public static final String KEY_PERKAWINAN_ID_PERKAWINAN = "id_perkawinan";
	public static final String KEY_PERKAWINAN_NAMA_CALON_ISTRI = "nama_calon_istri";
	public static final String KEY_PERKAWINAN_TEMPAT_LAHIR_CALON_ISTRI = "tempat_lahir_calon_istri";
	public static final String KEY_PERKAWINAN_TANGGAL_LAHIR_CALON_ISTRI = "tanggal_lahir_calon_istri";
	public static final String KEY_PERKAWINAN_ALAMAT_CALON_ISTRI = "alamat_calon_istri";
	public static final String KEY_PERKAWINAN_TELEPON_CALON_ISTRI = "telepon_calon_istri";
	public static final String KEY_PERKAWINAN_AGAMA_CALON_ISTRI = "agama_calon_istri";
	public static final String KEY_PERKAWINAN_GEREJA_CALON_ISTRI = "gereja_calon_istri";
	public static final String KEY_PERKAWINAN_NAMA_CALON_SUAMI = "nama_calon_suami";
	public static final String KEY_PERKAWINAN_TEMPAT_LAHIR_CALON_SUAMI = "tempat_lahir_calon_suami";
	public static final String KEY_PERKAWINAN_TANGGAL_LAHIR_CALON_SUAMI = "tanggal_lahir_calon_suami";
	public static final String KEY_PERKAWINAN_ALAMAT_CALON_SUAMI = "alamat_calon_suami";
	public static final String KEY_PERKAWINAN_TELEPON_CALON_SUAMI = "telepon_calon_suami";
	public static final String KEY_PERKAWINAN_AGAMA_CALON_SUAMI = "agama_calon_suami";
	public static final String KEY_PERKAWINAN_GEREJA_CALON_SUAMI = "gereja_calon_suami";
	public static final String KEY_PERKAWINAN_TANGGAL_PEMBERKATAN = "tanggal_pemberkatan";
	public static final String KEY_PERKAWINAN_NAMA_AYAH_CALON_SUAMI = "nama_ayah_calon_suami";
	public static final String KEY_PERKAWINAN_NAMA_AYAH_CALON_ISTRI = "nama_ayah_calon_istri";
	public static final String KEY_PERKAWINAN_AGAMA_AYAH_CALON_SUAMI = "agama_ayah_calon_suami";
	public static final String KEY_PERKAWINAN_AGAMA_AYAH_CALON_ISTRI = "agama_ayah_calon_istri";
	public static final String KEY_PERKAWINAN_PEKERJAAN_AYAH_CALON_SUAMI = "pekerjaan_ayah_calon_suami";
	public static final String KEY_PERKAWINAN_PEKERJAAN_AYAH_CALON_ISTRI = "pekerjaan_ayah_calon_istri";
	public static final String KEY_PERKAWINAN_ALAMAT_AYAH_CALON_SUAMI = "alamat_ayah_calon_suami";
	public static final String KEY_PERKAWINAN_ALAMAT_AYAH_CALON_ISTRI = "alamat_ayah_calon_istri";
	public static final String KEY_PERKAWINAN_NAMA_IBU_CALON_SUAMI = "nama_ibu_calon_suami";
	public static final String KEY_PERKAWINAN_NAMA_IBU_CALON_ISTRI = "nama_ibu_calon_istri";
	public static final String KEY_PERKAWINAN_AGAMA_IBU_CALON_SUAMI = "agama_ibu_calon_suami";
	public static final String KEY_PERKAWINAN_AGAMA_IBU_CALON_ISTRI = "agama_ibu_calon_istri";
	public static final String KEY_PERKAWINAN_PEKERJAAN_IBU_CALON_SUAMI = "pekerjaan_ibu_calon_suami";
	public static final String KEY_PERKAWINAN_PEKERJAAN_IBU_CALON_ISTRI = "pekerjaan_ibu_calon_istri";
	public static final String KEY_PERKAWINAN_ALAMAT_IBU_CALON_SUAMI = "alamat_ibu_calon_suami";
	public static final String KEY_PERKAWINAN_ALAMAT_IBU_CALON_ISTRI = "alamat_ibu_calon_istri";
	public static final String KEY_PERKAWINAN_GEREJA = "gereja";

	//JSON Tags
	public static final String TAG_JSON_ARRAY_ALL_PERKAWINAN ="result";
	public static final String TAG_PERKAWINAN_ID_PERKAWINAN = "id_perkawinan";
	public static final String TAG_PERKAWINAN_NAMA_CALON_ISTRI = "nama_calon_istri";
	public static final String TAG_PERKAWINAN_TEMPAT_LAHIR_CALON_ISTRI = "tempat_lahir_calon_istri";
	public static final String TAG_PERKAWINAN_TANGGAL_LAHIR_CALON_ISTRI = "tanggal_lahir_calon_istri";
	public static final String TAG_PERKAWINAN_ALAMAT_CALON_ISTRI = "alamat_calon_istri";
	public static final String TAG_PERKAWINAN_TELEPON_CALON_ISTRI = "telepon_calon_istri";
	public static final String TAG_PERKAWINAN_AGAMA_CALON_ISTRI = "agama_calon_istri";
	public static final String TAG_PERKAWINAN_GEREJA_CALON_ISTRI = "gereja_calon_istri";
	public static final String TAG_PERKAWINAN_NAMA_CALON_SUAMI = "nama_calon_suami";
	public static final String TAG_PERKAWINAN_TEMPAT_LAHIR_CALON_SUAMI = "tempat_lahir_calon_suami";
	public static final String TAG_PERKAWINAN_TANGGAL_LAHIR_CALON_SUAMI = "tanggal_lahir_calon_suami";
	public static final String TAG_PERKAWINAN_ALAMAT_CALON_SUAMI = "alamat_calon_suami";
	public static final String TAG_PERKAWINAN_TELEPON_CALON_SUAMI = "telepon_calon_suami";
	public static final String TAG_PERKAWINAN_AGAMA_CALON_SUAMI = "agama_calon_suami";
	public static final String TAG_PERKAWINAN_GEREJA_CALON_SUAMI = "gereja_calon_suami";
	public static final String TAG_PERKAWINAN_TANGGAL_PEMBERKATAN = "tanggal_pemberkatan";
	public static final String TAG_PERKAWINAN_NAMA_AYAH_CALON_SUAMI = "nama_ayah_calon_suami";
	public static final String TAG_PERKAWINAN_NAMA_AYAH_CALON_ISTRI = "nama_ayah_calon_istri";
	public static final String TAG_PERKAWINAN_AGAMA_AYAH_CALON_SUAMI = "agama_ayah_calon_suami";
	public static final String TAG_PERKAWINAN_AGAMA_AYAH_CALON_ISTRI = "agama_ayah_calon_istri";
	public static final String TAG_PERKAWINAN_PEKERJAAN_AYAH_CALON_SUAMI = "pekerjaan_ayah_calon_suami";
	public static final String TAG_PERKAWINAN_PEKERJAAN_AYAH_CALON_ISTRI = "pekerjaan_ayah_calon_istri";
	public static final String TAG_PERKAWINAN_ALAMAT_AYAH_CALON_SUAMI = "alamat_ayah_calon_suami";
	public static final String TAG_PERKAWINAN_ALAMAT_AYAH_CALON_ISTRI = "alamat_ayah_calon_istri";
	public static final String TAG_PERKAWINAN_NAMA_IBU_CALON_SUAMI = "nama_ibu_calon_suami";
	public static final String TAG_PERKAWINAN_NAMA_IBU_CALON_ISTRI = "nama_ibu_calon_istri";
	public static final String TAG_PERKAWINAN_AGAMA_IBU_CALON_SUAMI = "agama_ibu_calon_suami";
	public static final String TAG_PERKAWINAN_AGAMA_IBU_CALON_ISTRI = "agama_ibu_calon_istri";
	public static final String TAG_PERKAWINAN_PEKERJAAN_IBU_CALON_SUAMI = "pekerjaan_ibu_calon_suami";
	public static final String TAG_PERKAWINAN_PEKERJAAN_IBU_CALON_ISTRI = "pekerjaan_ibu_calon_istri";
	public static final String TAG_PERKAWINAN_ALAMAT_IBU_CALON_SUAMI = "alamat_ibu_calon_suami";
	public static final String TAG_PERKAWINAN_ALAMAT_IBU_CALON_ISTRI = "alamat_ibu_calon_istri";
	public static final String TAG_PERKAWINAN_GEREJA = "gereja";

	// TK ============================================
	//Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
	public static final String KEY_TK_ID_REGISTRASI = "id_registrasi";
	public static final String KEY_TK_NAMA_LENGKAP = "nama_lengkap";
	public static final String KEY_TK_NIK = "nik";
	public static final String KEY_TK_ALAMAT = "alamat";
	public static final String KEY_TK_JENIS_KELAMIN = "jenis_kelamin";
	public static final String KEY_TK_TEMPAT_LAHIR = "tempat_lahir";
	public static final String KEY_TK_TANGGAL_LAHIR = "tanggal_lahir";
	public static final String KEY_TK_AGAMA = "agama";
	public static final String KEY_TK_KEWARGANEGARAAN = "kewarganegaraan";
	public static final String KEY_TK_TINGGAL_BERSAMA = "tinggal_bersama";
	public static final String KEY_TK_ANAK_KE = "anak_ke";
	public static final String KEY_TK_USIA = "usia";
	public static final String KEY_TK_TELEPON = "telepon";

	//JSON Tags
	public static final String TAG_JSON_ARRAY_TK ="result";
	public static final String TAG_TK_ID_REGISTRASI = "id_registrasi";
	public static final String TAG_TK_NAMA_LENGKAP = "nama_lengkap";
	public static final String TAG_TK_NIK = "nik";
	public static final String TAG_TK_ALAMAT = "alamat";
	public static final String TAG_TK_JENIS_KELAMIN = "jenis_kelamin";
	public static final String TAG_TK_TEMPAT_LAHIR = "tempat_lahir";
	public static final String TAG_TK_TANGGAL_LAHIR = "tanggal_lahir";
	public static final String TAG_TK_AGAMA = "agama";
	public static final String TAG_TK_KEWARGANEGARAAN = "kewarganegaraan";
	public static final String TAG_TK_TINGGAL_BERSAMA = "tinggal_bersama";
	public static final String TAG_TK_ANAK_KE = "anak_ke";
	public static final String TAG_TK_USIA = "usia";
	public static final String TAG_TK_TELEPON = "telepon";






}

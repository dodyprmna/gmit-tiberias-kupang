package com.example.gmit_tiberias_kupang.Activity;

public class konfigurasi {

    //Dibawah ini merupakan Pengalamatan dimana Lokasi Skrip CRUD PHP disimpan
    //Pada tutorial Kali ini, karena kita membuat localhost maka alamatnya tertuju ke IP komputer
    //dimana File PHP tersebut berada
    //PENTING! JANGAN LUPA GANTI IP SESUAI DENGAN IP KOMPUTER DIMANA DATA PHP BERADA
    public static final String URL_GET_ALL = "http://192.168.8.78/gmit/tampil_jadwal.php";
    public static final String URL_GET_ALL_PENGUMUMAN = "http://192.168.8.78/gmit/tampil_pengumuman.php";
    public static final String URL_GET_ALL_LITURGI = "http://192.168.8.78/gmit/tampil_liturgi.php";
    public static final String URL_GET_ALL_ARTIKEL = "http://192.168.8.78/gmit/tampil_artikel.php";
    public static final String URL_ADD = "http://192.168.8.78/gmit/tambah_member.php";
    public static final String URL_GET_LAPORAN = "http://192.168.8.78/gmit/tampil_laporan.php";


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

    // MEMBER ============================================
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_ID_M = "id_m";
    public static final String KEY_USER_M = "user";
    public static final String KEY_PASS_M = "pass";
    public static final String KEY_RAYON_M = "rayon";
    public static final String KEY_NAMA_M = "nama";

    //JSON Tags
    public static final String TAG_JSON_ARRAY_M ="result";
    public static final String TAG_ID_M = "id_m";
    public static final String TAG_USER_M = "user";
    public static final String TAG_PASS_M = "pass";
    public static final String TAG_RAYON_M = "rayon";
    public static final String TAG_NAMA_M = "nama";

    // LAPORAN ============================================
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_ID_LAP = "id_lap";
    public static final String KEY_JENIS_TR = "jenis_t";
    public static final String KEY_KATEGORI_LAP = "kat";
    public static final String KEY_JUMLAH_LAP = "jum";
    public static final String KEY_TGL_LAP = "tgl_t";
    public static final String KEY_KET_LAP = "ket_lap";

    //JSON Tags
    public static final String TAG_JSON_ARRAY_LAP ="result";
    public static final String TAG_ID_LAP = "id_lap";
    public static final String TAG_JENIS_TR = "jenis_t";
    public static final String TAG_KATEGORI_LAP = "kat";
    public static final String TAG_JUMLAH_LAP = "jum";
    public static final String TAG_TGL_LAP = "tgl_t";
    public static final String TAG_KET_LAP = "ket_lap";



}

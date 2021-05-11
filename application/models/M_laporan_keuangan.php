<?php

use phpDocumentor\Reflection\Types\Null_;

class M_laporan_keuangan extends CI_Model {

	public function get_laporan($tanggal_awal = null, $tanggal_akhir = null)
	{
		$query = $this->db->query("
            SELECT *
            FROM laporan_keuangan
        ");

        if ($tanggal_awal != null && $tanggal_akhir != null) {
            $query .= "tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
        }

        return $query;
	}

    public function get_pemasukan($tanggal_awal = null, $tanggal_akhir = null)
    {
        $query = $this->db->query("
            SELECT SUM(jumlah) as jumlah
            FROM laporan_keuangan
            WHERE jenis_transaksi = '0'
        ");

        if ($tanggal_awal != null && $tanggal_akhir != null) {
            $query .= "tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
        }

        return $query;
    }

    public function get_pengeluaran($tanggal_awal = null, $tanggal_akhir = null)
    {
        $query = $this->db->query("
            SELECT SUM(jumlah) as jumlah
            FROM laporan_keuangan
            WHERE jenis_transaksi = '1'
        ");

        if ($tanggal_awal != null && $tanggal_akhir != null) {
            $query .= "tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
        }

        return $query;
    }

    public function get_kolekte($tanggal_awal = null, $tanggal_akhir = null)
    {
        $query = $this->db->query("
            SELECT SUM(jumlah) as jumlah
            FROM laporan_keuangan
            WHERE kategori = '1'
        ");

        if ($tanggal_awal != null && $tanggal_akhir != null) {
            $query .= "tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
        }

        return $query;
    }

    public function get_perpuluhan($tanggal_awal = null, $tanggal_akhir = null)
    {
        $query = $this->db->query("
            SELECT SUM(jumlah) as jumlah
            FROM laporan_keuangan
            WHERE kategori = '2'
        ");

        if ($tanggal_awal != null && $tanggal_akhir != null) {
            $query .= "tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
        }

        return $query;
    }

    public function get_nazar($tanggal_awal = null, $tanggal_akhir = null)
    {
        $query = $this->db->query("
            SELECT SUM(jumlah) as jumlah
            FROM laporan_keuangan
            WHERE kategori = '3'
        ");

        if ($tanggal_awal != null && $tanggal_akhir != null) {
            $query .= "tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
        }

        return $query;
    }

}
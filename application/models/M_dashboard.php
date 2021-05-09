<?php

class M_dashboard extends CI_Model {

	public function get_data_perbulan_vendor($vendor)
	{
        $tahun = date('Y');
		$query = $this->db->query("SELECT 
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=1)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Januari`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=2)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Februari`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=3)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Maret`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=4)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `April`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=5)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Mei`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=6)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Juni`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=7)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Juli`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=8)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Agustus`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=9)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `September`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=10)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Oktober`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=11)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `November`,
        ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=12)AND (YEAR(tgl_upload)= $tahun) AND (fk_id_user = $vendor))),0) AS `Desember`
        FROM  tbl_faktur_pajak
        GROUP BY YEAR (tgl_upload)");
		return $query->result();
    }
    
    public function get_data_perbulan()
	{
        $tahun = date('Y');
		$query = $this->db->query("SELECT 
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=1)AND (YEAR(tgl_upload)= $tahun))),0) AS `Januari`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=2)AND (YEAR(tgl_upload)= $tahun))),0) AS `Februari`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=3)AND (YEAR(tgl_upload)= $tahun))),0) AS `Maret`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=4)AND (YEAR(tgl_upload)= $tahun))),0) AS `April`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=5)AND (YEAR(tgl_upload)= $tahun))),0) AS `Mei`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=6)AND (YEAR(tgl_upload)= $tahun))),0) AS `Juni`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=7)AND (YEAR(tgl_upload)= $tahun))),0) AS `Juli`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=8)AND (YEAR(tgl_upload)= $tahun))),0) AS `Agustus`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=9)AND (YEAR(tgl_upload)= $tahun))),0) AS `September`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=10)AND (YEAR(tgl_upload)= $tahun))),0) AS `Oktober`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=11)AND (YEAR(tgl_upload)= $tahun))),0) AS `November`,
                                    ifnull((SELECT count(id_faktur_pajak ) FROM (tbl_faktur_pajak tfp )WHERE((Month(tgl_upload)=12)AND (YEAR(tgl_upload)= $tahun))),0) AS `Desember`
                                    FROM  tbl_faktur_pajak
                                    GROUP BY YEAR (tgl_upload)");
		return $query->result();
    }
    
    public function get_data_pertahun($tahun)
	{
		$query = $this->db->query("SELECT id_faktur_pajak
                                    FROM  tbl_faktur_pajak
                                    WHERE YEAR(tgl_upload) = $tahun");
		return $query;
    }

    public function get_data_pertahun_vendor($tahun,$vendor)
	{
		$query = $this->db->query("SELECT id_faktur_pajak
                                    FROM  tbl_faktur_pajak
                                    WHERE YEAR(tgl_upload) = $tahun
                                    AND fk_id_user = $vendor");
		return $query;
    }

    public function get_tahun()
    {
        $query = $this->db->query("SELECT distinct(YEAR(tgl_upload)) as tahun
                                    FROM  tbl_faktur_pajak");
		return $query->result();
    }

}
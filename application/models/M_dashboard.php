<?php

class M_dashboard extends CI_Model {

	public function get_statistik_baptisan()
	{
        $tahun = date('Y');
		    $query = $this->db->query("SELECT 
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=1)AND (YEAR(added_at)= $tahun))),0) AS `Januari`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=2)AND (YEAR(added_at)= $tahun))),0) AS `Februari`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=3)AND (YEAR(added_at)= $tahun))),0) AS `Maret`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=4)AND (YEAR(added_at)= $tahun))),0) AS `April`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=5)AND (YEAR(added_at)= $tahun))),0) AS `Mei`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=6)AND (YEAR(added_at)= $tahun))),0) AS `Juni`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=7)AND (YEAR(added_at)= $tahun))),0) AS `Juli`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=8)AND (YEAR(added_at)= $tahun))),0) AS `Agustus`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=9)AND (YEAR(added_at)= $tahun))),0) AS `September`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=10)AND (YEAR(added_at)= $tahun))),0) AS `Oktober`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=11)AND (YEAR(added_at)= $tahun))),0) AS `November`,
          ifnull((SELECT count(id_baptisan) FROM (baptisan)WHERE((Month(added_at)=12)AND (YEAR(added_at)= $tahun))),0) AS `Desember`
          FROM  baptisan
          GROUP BY YEAR (added_at)");
		    return $query->result();
  }

  public function get_statistik_perkawinan()
	{
        $tahun = date('Y');
		    $query = $this->db->query("SELECT 
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=1)AND (YEAR(added_at)= $tahun))),0) AS `Januari`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=2)AND (YEAR(added_at)= $tahun))),0) AS `Februari`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=3)AND (YEAR(added_at)= $tahun))),0) AS `Maret`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=4)AND (YEAR(added_at)= $tahun))),0) AS `April`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=5)AND (YEAR(added_at)= $tahun))),0) AS `Mei`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=6)AND (YEAR(added_at)= $tahun))),0) AS `Juni`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=7)AND (YEAR(added_at)= $tahun))),0) AS `Juli`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=8)AND (YEAR(added_at)= $tahun))),0) AS `Agustus`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=9)AND (YEAR(added_at)= $tahun))),0) AS `September`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=10)AND (YEAR(added_at)= $tahun))),0) AS `Oktober`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=11)AND (YEAR(added_at)= $tahun))),0) AS `November`,
          ifnull((SELECT count(id_perkawinan) FROM (perkawinan)WHERE((Month(added_at)=12)AND (YEAR(added_at)= $tahun))),0) AS `Desember`
          FROM  perkawinan
          GROUP BY YEAR (added_at)");
		    return $query->result();
  }

  public function get_statistik_jemaat()
	{
        $tahun = date('Y');
		    $query = $this->db->query("SELECT 
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=1)AND (YEAR(added_at)= $tahun))),0) AS `Januari`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=2)AND (YEAR(added_at)= $tahun))),0) AS `Februari`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=3)AND (YEAR(added_at)= $tahun))),0) AS `Maret`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=4)AND (YEAR(added_at)= $tahun))),0) AS `April`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=5)AND (YEAR(added_at)= $tahun))),0) AS `Mei`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=6)AND (YEAR(added_at)= $tahun))),0) AS `Juni`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=7)AND (YEAR(added_at)= $tahun))),0) AS `Juli`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=8)AND (YEAR(added_at)= $tahun))),0) AS `Agustus`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=9)AND (YEAR(added_at)= $tahun))),0) AS `September`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=10)AND (YEAR(added_at)= $tahun))),0) AS `Oktober`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=11)AND (YEAR(added_at)= $tahun))),0) AS `November`,
          ifnull((SELECT count(id_jemaat) FROM (jemaat)WHERE((Month(added_at)=12)AND (YEAR(added_at)= $tahun))),0) AS `Desember`
          FROM  jemaat
          GROUP BY YEAR (added_at)");
		    return $query->result();
  }

  public function get_statistik_tk($tahun)
	{
        $query = $this->db->query("
          SELECT id_registrasi
          FROM registrasi_tk
          WHERE YEAR(added_at) = '$tahun'
        ");

        return $query;

  }

  public function get_tahun_registrasi_tk()
	{
        $query = $this->db->query("
          SELECT distinct(YEAR(added_at)) as tahun
          FROM registrasi_tk
        ");

        return $query;

  }

}
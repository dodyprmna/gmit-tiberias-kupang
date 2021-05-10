<?php

class M_artikel extends CI_Model {

	public function get_all()
	{
		$this->db->SELECT('*');
		$this->db->FROM('artikel');
		$this->db->ORDER_BY('id_artikel', 'DESC');

		return $this->db->get();
	}

	public function get_by_id($id)
	{
		$this->db->SELECT('*');
		$this->db->FROM('warta_jemaat w');
		$this->db->JOIN('jadwal_ibadah j','w.id_jadwal = j.id_jadwal');
		$this->db->ORDER_BY('w.id_warta', 'DESC');
		return $this->db->get();
	}

}
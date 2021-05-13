<?php

class M_liturgi extends CI_Model {

	public function get_all()
	{
		$this->db->SELECT('*');
		$this->db->FROM('liturgi l');
		$this->db->JOIN('jadwal_ibadah j','l.id_jadwal = j.id_jadwal');
		$this->db->ORDER_BY('l.id_liturgi', 'DESC');

		return $this->db->get();
	}

	public function get_by_id($id)
	{
		$this->db->SELECT('*');
		$this->db->FROM('liturgi l');
		$this->db->JOIN('jadwal_ibadah j','l.id_jadwal = j.id_jadwal');
		$this->db->ORDER_BY('l.id_liturgi', 'DESC');
		return $this->db->get();
	}

}
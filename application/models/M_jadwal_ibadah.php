<?php

class M_jadwal_ibadah extends CI_Model {

	public function get_all()
	{
		$this->db->SELECT('*');
		$this->db->FROM('jadwal_ibadah j');
		$this->db->JOIN('kategori k','j.id_kategori = k.id_kategori','left');
		$this->db->WHERE('j.deleted_at',null);
		$this->db->ORDER_BY('j.id_jadwal', 'DESC');

		return $this->db->get();
	}

	public function get_by_id($id)
	{
		$this->db->SELECT('*');
		$this->db->FROM('jadwal_ibadah j');
		$this->db->JOIN('kategori k','j.id_kategori = k.id_kategori','left');
		$this->db->WHERE('j.id_jadwal', $id);
		return $this->db->get();
	}

}